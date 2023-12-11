<?php
namespace  App\Http\Controllers;


use App\Http\Requests\FormContactRequest;
use App\Models\Property;
use App\Http\Requests\SerachFormRequest;
use App\Mail\PropertyContactMail;


use Illuminate\Support\Facades\Mail;

class BiensController extends Controller{

    public function index(SerachFormRequest $request){

        $query = Property::query();
      
        if($request->validated('price')){
            $query= $query->where('price','<=',$request->input('price'));
        }
        $input = $request->validated();

        if($request->validated('surface')){
            $query= $query->where('surface','>=',$request->input('surface'));
        }
        $surface = $request->validated();

        if($request->validated('rooms')){
            $query= $query->where('rooms','>=',$request->input('rooms'));
        }
        $rooms = $request->validated();

        if($request->validated('title')){
            $query= $query->where('title','like',"%{$request->input('title') }%");
        }
        $title = $request->validated();


        $properties = $query->paginate(4);

        return view('biens.index',['properties'=>$properties,'input'=>$input,'surface'=>$surface,'rooms'=>$rooms,'title'=>$title]);
    }

    public function show($slug,Property $property){

        $property=Property::find($property->id);

        if($slug != $property->getSlug()){
            return to_route('biens.show',['slug'=>$property->getSlug(),'property'=>$property]);
        }

        return view('biens.show',['property'=>$property]);
        
    }

    //contact with admin from contact form
    public function contact(FormContactRequest $request,Property $property){

        $data = $request->validated();

        Mail::send(new PropertyContactMail($property,$data));
        
        return back()->with('success','Votre email envoyé avec success');
    }

}
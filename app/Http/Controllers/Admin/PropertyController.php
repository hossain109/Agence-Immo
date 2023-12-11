<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Models\Option;
use App\Models\Picture;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.properties.index',['properties'=>Property::orderBy('created_at','desc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();

        $property->surface=40;
        $property->rooms=4;
        $property->bedrooms=2;
        $property->floor=0;
        $property->city='Montpollier';
        $property->postal_code="34000";
        $property->sold=false;

        $options = Option::all();
        $images = Picture::all();
        

        return view('admin.properties.form',['property'=>$property,'options'=>$options,'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {
       //dd($request);
        $property = Property::create($request->validated());

        $property->options()->sync($request->validated('option'));

        //$property->pictures()->create([$request->validated('alt')]);


        //$request->tags()->sync($request->input('option'));
        
       return to_route('admin.property.index')->with('success',"Le bien a été bien crée") ;
      // return view('admin.properties.index')->with('success',"Le bien a été bien crée") ;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {


        return view('admin.properties.form',['property'=>$property,'options'=>Option::all(),'images'=>Picture::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, Property $property)
    {
        $property->update($request->validated());

        $property->options()->sync($request->validated('option'));
        
        return to_route('admin.property.index')->with('success',"Le bien a été bien modifié") ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return to_route('admin.property.index')->with('success',"Le bien a été bien suprimé") ;
    }
}

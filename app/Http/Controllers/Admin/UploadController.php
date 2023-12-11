<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImageFormRequest;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    //uplaod form
    public function upload(){

        $image = new Picture();

        return view('admin.upload.uploadfile',['image'=>$image]);
    }
    //store file
    public function uploadFile(Request $request){
        //echo json_encode($image->id);die;

        $query = Picture::query();

        $alt = $request->get('Alt');

        $altFinder = $query->where('alt','like',"%{$alt}%")->get();

        //var_dump($altFinder);

        if(count($altFinder) ===0){

        $path = $request->file('fileKey')->store();
          
       $result = Picture::create([
        'alt'=>$alt,
        'path'=>$path
       ]);
      if($result){
        $message = "success";
      }else {
        $message = 'failed';
      }
      echo json_encode($message);
    }else{
      echo json_encode('exist');
    }
    
    }

    //display all file
    public function display(){
        
        $result = Picture::orderBy('created_at','desc')->paginate(5);

        return view('admin.upload.index',['images'=>$result]);
    }

    //edit form
    public function edit(Picture $image){
       // $image=Picture::find($id);
        return view('admin.upload.uploadfile',['image'=>$image]);
    }
    //delte image
    public function delete(Picture $image){
      //dd($image->path);
      Storage::delete($image->path);

      $image->delete();

      return to_route('admin.image.display')->with('success',"Message deleted avec success");

    }

}

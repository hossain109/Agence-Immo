<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function accueil(){

        return view('biens.accueil');
    }

    public function index(){


        $properties = Property::query()->available(false)->recent()->paginate(4);
       // dd($properties[0]->sold);
       $user = User::first();
       $user->name='Inaya Hossain';
       $user->password='1111';
        dd($user);
        return view('biens.index',['properties'=>$properties]);
    }

    public function recherche_show($string){

      //  $properties = query($string)->paginate(2);

       // return view('biens.index',['properties'=>$properties]);
    }
}

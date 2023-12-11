<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){

        // User::create([
        //     'name'=>'sorhab hossain',
        //     'email'=>'sohrab_sust_cse@yahoo.com',
        //     'password'=>Hash::make('1234')
        // ]);

        return view('auth.login');
    }
    public function dologin(FormLoginRequest $request){

        $credential = $request->validated();
        //dd($credential);
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return to_route('admin.option.index');
        }

        return back()->withErrors([
            'emails'=>'Identification non valid'
        ])->onlyInput('email');

    }
    public function logout(){
        Auth::logout();
        return to_route('biens.login')->with('success','Vous etes matenant déconnecté');
    }
}

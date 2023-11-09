<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login (){
        return view("Backend.pages.Login.Login");
    }
    public function store(Request $request){
        //($request->all());
        $credentials = $request->except("_token");
        $login =auth()->attempt($credentials);
        if($login){
            return redirect()->route("dashboard");
        }
        
        return redirect()->back();


    }

}


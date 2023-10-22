<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function fariha(){
        return view("master");
    }
    public function home(){
        return view("Backend.master");
        
    }
    public function n2(){
        return view("noshin");
    }
}



<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
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



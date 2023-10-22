<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list(){
        return view('Backend.pages.admin.admin');
    }


    public function form(){
        return view('Backend.pages.admin.form');
    }
    
}

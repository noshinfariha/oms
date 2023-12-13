<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list(){
        return view('Backend.pages.admin.admin');
    }


    public function form(){
        return view('Backend.pages.admin.form');
    }
    

    public function adminprofile(){
        return view('Backend.pages.admin.profile');
    }
}

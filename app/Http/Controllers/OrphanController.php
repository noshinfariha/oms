<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrphanController extends Controller
{
    public function list(){
        return view("Backend.pages.orphans.orphan");
    }
    public function form(){
        return view("Backend.pages.orphans.form");
}
}
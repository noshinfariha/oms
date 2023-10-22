<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdoptionController extends Controller
{
public function list(){
    return view("Backend.pages.adoption.adoption");
}
}

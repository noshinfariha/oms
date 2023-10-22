<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function list(){
        return view("Backend.pages.parents.parent");
    }
}

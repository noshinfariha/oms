<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function list(){
        return view("Backend.pages.staff.staff");
    }
}

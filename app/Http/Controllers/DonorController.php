<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function list(){
        return view("Backend.pages.donor.donor");
    }
}

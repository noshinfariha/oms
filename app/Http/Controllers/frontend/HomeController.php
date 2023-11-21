<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function frontendhome(){
        return view('Frontend.master');
    }
    public function registration()
    {
        return view('Frontend.Partial.registration');
    }
    
}

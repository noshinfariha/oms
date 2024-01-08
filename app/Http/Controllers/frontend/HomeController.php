<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function frontendhome(){
        return view('Frontend.pages.Home.home');
    }
    public function registration()
    {
        return view('Frontend.Partial.registration');
    }
    
}

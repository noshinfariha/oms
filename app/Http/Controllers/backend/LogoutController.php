<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LogoutController extends Controller
{
    public function logout(){
        
        auth()->logout();
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Expense;
use App\Models\Orphan;
use App\Models\Staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function fariha(){
        return view("master");
    }
    public function home(){

        $donations = Donation::count();
        $orphans = Orphan::count();
        $staff = Staff::count();
        $expenses = Expense::count();


        return view("Backend.pages.dashboard",compact('donations','orphans','staff','expenses'));
        
    }
    public function n2(){
        return view("n2");
    }
}



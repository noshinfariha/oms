<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function list(){
        return view("Backend.pages.expense.expense");
    }
}

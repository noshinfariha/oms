<?php

namespace App\Http\Controllers\backend;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{
    public function print()
    { 
        $accountsdata=Account::all();
        return view("Backend.pages.account.print",compact('accountsdata'));
    }
    public function list()
    { 
        $accountsdata=Account::all();
        return view("Backend.pages.account.account",compact('accountsdata'));
    }

}
    

   


 
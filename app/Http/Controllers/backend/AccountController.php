<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    public function list()
    { 
        $accountsdata=Account::all();
        return view("Backend.pages.account.account",compact('accountsdata'));
    }
    public function form()
    {
        return view("Backend.pages.account.form");
    }

 public function store(Request $fariha)
    {
      // dd($fariha->all());
       Account::create([
        'orphan_name' => $fariha->orphan_name,
            'status' => $fariha->status,
            'age' => $fariha->age,
            'image' => $fariha->image,
            'gender' => $fariha->radio,
  ]);       
  return redirect()->route('account');
}
}

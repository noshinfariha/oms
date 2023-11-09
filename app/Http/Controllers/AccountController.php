<?php

namespace App\Http\Controllers;

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
        return view("Backend.pages.orphans.form");
    }
    public function store(Request $fariha)
    {
       // dd($fariha->all());
       Account::create([
        'orphan_name'=>$fariha->orphan_name,
        'status'=>$fariha->status,
        'address'=>$fariha->address,
        'date'=> $fariha->date,
        'image'=>$fariha->image,
       'religion'=>$fariha->religion,
        'gender'=>$fariha->radio,
        'action'=>$fariha->action,
  ]);       
       return redirect(url('/account/list'));
    }
}
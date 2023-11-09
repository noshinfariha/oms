<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function list(){
        $donorsdata=Donor::all();
        return view("Backend.pages.donor.donor",compact('donorsdata'));
    }
    public function form(){
        return view("Backend.pages.donor.form");
}
public function store (Request $noshin){
    dd($noshin ->all());

    Donor::create([
        'full_name'=>$noshin->full_name,
        'email'=>$noshin->email,
        'password'=>$noshin->password,
        'phone'=> $noshin->phone,
        'address'=>$noshin->address,
        'date'=>$noshin->date,
        'gender'=>$noshin->radio,
        'status'=>$noshin->status,
  ]);       
  return redirect(url('/donor/list'));
    }
}


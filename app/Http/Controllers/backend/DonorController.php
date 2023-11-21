<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function list(){
        $donorsdata=Donor::paginate(3);
        return view("Backend.pages.donor.donor",compact('donorsdata'));
    }
    public function form(){
        return view("Backend.pages.donor.form");
}
public function store (Request $noshin){
   // dd($noshin ->all());

    Donor::create([
        'full_name'=>$noshin->full_name,
        'email'=>$noshin->email,
        'password'=>$noshin->password,
        'phone'=> $noshin->phone,
        'address'=>$noshin->address,
        'date'=>$noshin->date,
        'gender'=>$noshin->radio,
        'image'=>$noshin->image,
  ]);       
  return redirect(route('donor'));
    }
}

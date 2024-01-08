<?php

namespace App\Http\Controllers\backend;

use App\Models\Donor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Support\Facades\Validator;

class DonorController extends Controller
{
    public function print(){
        $donorsdata=Donor::paginate(3);
        return view("Backend.pages.donor.print",compact('donorsdata'));
    }
    public function list(){
        $donorsdata=Donation::paginate(3);
        return view("Backend.pages.donor.donor",compact('donorsdata'));
    }
    public function form(){
        return view("Backend.pages.donor.form");
    }



        

public function store (Request $noshin){

    $validator = Validator::make($noshin->all(), [
        'full_name' => 'required|string|max:255',
        'phone' => 'required',
        'email' => 'required|email',
        'address' => 'required|string|max:255',
    ]);
    
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    Donor::create([
        'full_name'=>$noshin->full_name,
        'phone'=> $noshin->phone,
        'address'=>$noshin->address,
        
  ]);       
  return redirect(route('donor'));
    }
}






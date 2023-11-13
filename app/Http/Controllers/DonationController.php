<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DonationController extends Controller
{
    public function list(){
        $donationsdata=Donation::paginate(3);
        return view("Backend.pages.donation.donation",compact('donationsdata'));
    }
    public function form(){
        return view("Backend.pages.donation.form");
    }
    public function store (Request $noshin){

        $validate=validator::make($noshin->all(),[
            'donation_type'=>'required', 
            
    

         ]);

         if($validate->fails()){
             return redirect()->back();
         } 
        dd($noshin ->all());
        Donation::create([
            'donation_amount'=>$noshin-> donation_amount,
            'donation_type'=>$noshin->donation_type,
            'status'=>$noshin->status,
            'adoption_date'=> $noshin->adoption_date,
        
      ]);       
      return redirect()->route('ddd');
    

}
}
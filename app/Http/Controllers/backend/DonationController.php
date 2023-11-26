<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
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

    public function delete($id)
    {
        $donationDelete = Donation::find($id);

        if ($donationDelete) {
            $donationDelete->delete();
        }
    }
    public function store (Request $noshin){

        $validate=validator::make($noshin->all(),[
            'donation_type'=>'required', 
            
    

         ]);

         if($validate->fails()){
             return redirect()->back();
         } 
       // dd($noshin ->all());
        Donation::create([
            'donation_amount'=>$noshin-> donation_amount,
            'donation_type'=>$noshin->donation_type,
             'payment_option'=>$noshin->payment_option,
    
      ]);       
      return redirect()->route('donation');
    

}
}
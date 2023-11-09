<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function list(){
        $donationsdata=Donation::all();
        return view("Backend.pages.donation.donation",compact('donationsdata'));
    }
    public function form(){
        return view("Backend.pages.donation.form");
    }
    public function store (Request $noshin){
        dd($noshin ->all());
        Donation::create([
            'donation_amount'=>$noshin-> donation_amount,
            'donation_type'=>$noshin->donation_type,
            'status'=>$noshin->status,
            'adoption_date'=> $noshin->adoption_date,
        
      ]);       
      return redirect(url('/donations/list'));
    

}
}
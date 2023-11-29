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

    public function edit($id)
    {
        $donationEdit = Donation::find($id);
        return view('Backend.pages.donation.edit', compact('donationEdit'));
    }

    public function update(Request $request, $id)
    {
        $donationEdit = Donation::find($id);
        if ($donationEdit) {

              $fileName=$donationEdit->image;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();               
                $file->move("uploads",$fileName);
      
            }


            $donationEdit->update([
                'amount' => $request->amount,
                'payment_method' => $request->payment_method,
                'receiver_account' => $request->receiver_account,
                'transaction_id'=>$request->transaction_id, 
                'receipt'=>$request->receipt,        
       
             ]);
            return redirect()->route('donation');
        }
    }
    public function store (Request $noshin){

        $validate=validator::make($noshin->all(),[
            'payment_method'=>'required', 
            
    

         ]);

         if($validate->fails()){
             return redirect()->back();
         } 
       // dd($noshin ->all());
        Donation::create([
            'amount'=>$noshin->amount,
            'payment_method'=>$noshin->payment_method,
             'receiver_account'=>$noshin->receiver_account,
             'transaction_id'=>$noshin->transaction_id,
             'receipt'=>$noshin->receipt,
             
      ]);       
      return redirect()->route('frontend');
    

}
}
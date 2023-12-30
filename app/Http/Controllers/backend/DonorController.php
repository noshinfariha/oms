<?php

namespace App\Http\Controllers\backend;

use App\Models\Donor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DonorController extends Controller
{
    public function print(){
        $donorsdata=Donor::paginate(3);
        return view("Backend.pages.donor.print",compact('donorsdata'));
    }
    public function list(){
        $donorsdata=Donor::paginate(3);
        return view("Backend.pages.donor.donor",compact('donorsdata'));
    }
    public function form(){
        return view("Backend.pages.donor.form");
    }
    public function delete($id)
{
$donorDelete = Donor::find($id);
    
if ($donorDelete) {
    $donorDelete->delete();
}

return redirect()->route('donor');
}

 public function edit($id)
    {
        $donorEdit = Donor::find($id);
        return view('Backend.pages.donor.edit', compact('donorEdit'));
    }

    public function update(Request $request, $id)
    {
        $donorEdit = Donor::find($id);
        if ($donorEdit) {

              $fileName=$donorEdit->image;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();               
                $file->move("uploads",$fileName);
      
            }
            $donorEdit->update([
                'full_name' => $request->full_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->addrerss,          
             ]);
            return redirect()->route('donor');
        }
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
        'email'=>$noshin->email,
        'address'=>$noshin->address,
        
  ]);       
  return redirect(route('donor'));
    }
}



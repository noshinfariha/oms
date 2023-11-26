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
    public function delete($id)
{
$donorDelete = Donor::find($id);
    
if ($donorDelete) {
    $donorDelete->delete();
}

return redirect()->route('donor');
}

public function store (Request $noshin){
   // dd($noshin ->all());

    Donor::create([
        'full_name'=>$noshin->full_name,
        'phone'=> $noshin->phone,
        'address'=>$noshin->address,
        'gender'=>$noshin->radio,
        'image'=>$noshin->image,
  ]);       
  return redirect(route('donor'));
    }
}



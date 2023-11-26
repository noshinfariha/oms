<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Expensecategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpensecategoryController extends Controller
{
    public function list(){

        $expensecategory=Expensecategory::paginate(3);

     return view("Backend.pages.expensecategory.expensecategory",compact('expensecategory'));
    }

public function form()
    {
        return view("Backend.pages.expensecategory.form");
    }

    public function delete($id)
    {
    $expensecategoryDelete = Expensecategory::find($id);
        
    if ($expensecategoryDelete) {
        $expensecategoryDelete->delete();
    }
    
    return redirect()->route('expensecategory');
    }
    public function store(Request $fariha)

    {
         $validate = validator::make($fariha->all(),[ 
            'payment method'=>'payment method'
    

         ]);

         if($validate->fails()){
             return redirect()->back();
         } 


 // dd($fariha->all());    
       Expensecategory::create([
        'category'=>$fariha->category,
        'description'=>$fariha->description,
        'payment_method'=> $fariha->payment_method,
       'amount'=>$fariha->amount,
        'invoice_number'=>$fariha->invoice_number,
  ]);       

  return redirect()->route('expensecategory');
 
 }
 
 }
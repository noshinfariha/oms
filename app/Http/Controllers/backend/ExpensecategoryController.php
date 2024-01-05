<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Expensecategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpensecategoryController extends Controller
{
    public function print(){

        $expensecategory=Expensecategory::paginate(3);

     return view("Backend.pages.expensecategory.print",compact('expensecategory'));
    }
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

    public function edit($id)
    {
        $expensecategoryEdit =Expensecategory::find($id);
        return view('Backend.pages.expensecategory.edit', compact('expensecategoryEdit'));
    }

    public function update(Request $request, $id)
    {
        $expensecategoryEdit = Expensecategory::find($id);
      
            $expensecategoryEdit->update([

                'name' => $request->name,
                'status' => $request->status,  
              ]);
            return redirect()->route('expensecategory');
        
    }
    public function store(Request $fariha)

    {
         $validate = validator::make($fariha->all(),[ 
        
            'name' => 'required|string|max:255',
            'status' => 'required',

         ]);

         if($validate->fails()){
             return redirect()->back();
         } 

   
       Expensecategory::create([

        'name'=>$fariha->name,
        'status'=> $fariha->status,
      
  ]);       

  return redirect()->route('expensecategory');
 
 }
 
 }

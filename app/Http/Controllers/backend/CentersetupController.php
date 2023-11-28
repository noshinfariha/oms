<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\centersetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CentersetupController extends Controller
{
    public function list(){

        $centersetupdata=Centersetup::paginate(3);

     return view("Backend.pages.centersetup.centersetup",compact('centersetupdata'));
    }

public function form()
    {
        return view("Backend.pages.centersetup.form");
    }

    public function delete($id)
    {
    $centersetupDelete = Centersetup::find($id);
        
    if ($centersetupDelete) {
        $centersetupDelete->delete();
    }
    
    return redirect()->route('centersetup');
    }
    public function store(Request $fariha)

    {
         $validate = validator::make($fariha->all(),[ 
            'module'=>'required'
    

         ]);

         if($validate->fails()){
             return redirect()->back();
         } 


 // dd($fariha->all());    
    Centersetup::create([
        'task_id'=>$fariha->task_id,
        'module'=> $fariha->module,
        'task'=>$fariha->task,
       'start_date'=>$fariha->start_date,
       'end_date'=>$fariha->end_date,
        'notes'=>$fariha->notes,
  ]);       

  return redirect()->route('centersetup');
 
 }
 
 }
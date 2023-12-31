<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\centersetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CentersetupController extends Controller
{
    public function print(){

        $centersetupdata=Centersetup::paginate(3);

     return view("Backend.pages.centersetup.print",compact('centersetupdata'));
    }

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

    public function edit($id)
    {
        $centersetupEdit = Centersetup::find($id);
        return view('Backend.pages.centersetup.edit', compact('centersetupEdit'));
    }

    public function update(Request $request, $id)
    {
        $centersetupEdit = Centersetup::find($id);
        if ($centersetupEdit) {

              $fileName=$centersetupEdit->image;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();               
                $file->move("uploads",$fileName);
      
            }


            $centersetupEdit->update([
                'task_id' => $request->task_id,
                'module' => $request->module,
                'task' => $request->task,
                'status' => $request->status,          
             ]);
            return redirect()->route('centersetup');
        }
    }
    public function store(Request $fariha)

    {
        $validator = Validator::make($fariha->all(), [
            'task_id' => 'required', 
            'module' => 'required|string|max:255',
            'task' => 'required|string|max:255',
            'status' => 'required',
        ]);
        
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } 


 // dd($fariha->all());    
    Centersetup::create([
        'task_id'=>$fariha->task_id,
        'module'=> $fariha->module,
        'task'=>$fariha->task,
       'status'=>$fariha->status,

  ]);       

  return redirect()->route('centersetup');
 
 }
 
 }

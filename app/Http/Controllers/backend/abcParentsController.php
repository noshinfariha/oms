<?php

namespace App\Http\Controllers\backend;

use App\Models\Parents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;



class abcParentsController extends Controller
{
    public function list(){


        // $gh= model::with(rls)->where('role', auth()->user()->id)->get();
        // $fariha=User::withwhere('role->parents')->get();
        $fariha= Parents::all();
         return view("Backend.pages.abcParents.parent",compact('fariha'));
 
     }
     public function form()
     {
         return view("Backend.pages.abcParents.form");
     }

     public function delete($id)
    {
        $parentDelete = Parents::find($id);

        if($parentDelete)
        {
            $parentDelete->delete();
        }

        return redirect()->route('parents');
    }

    public function edit($id)
    {
        $parentEdit = Parents::find($id);
        return view('Backend.pages.abcParents.edit', compact('parentEdit'));
    }

    public function update(Request $request, $id)
    {
        $parentEdit = Parents::find($id);
        if ($parentEdit) {

              $fileName=$parentEdit->image;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();               
                $file->move("uploads",$fileName);
      
            }


            $parentEdit->update([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'image' => $fileName,           
             ]);
            return redirect()->route('parents');
        }
    }


    public function store(Request $fariha)
    {
        {

            $validate = Validator::make($fariha->all(), [
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|unique:parents,email',
                'phone' => 'required',
                'address' => 'required|string|max:255',
                'image' => 'required',
            ]);
        
            
            if ($validate->fails()) {
                return redirect()->back()->withErrors($validate)->withInput();
            }
            
        
            $fileName = null;
            if ($fariha->hasFile('image')) {
                $file = $fariha->file('image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                // $destination = "uploads";
                // $file->move($destination, $fileName);
            }
                $file->move("uploads", $fileName);
            }
    
             //dd($noshin ->all());
             Parents::create([
             'full_name'=>$fariha->full_name,
             'email'=>$fariha->email,
             'phone'=> $fariha->phone,
             'address'=>$fariha->address,
            'image'=>$fileName,
             
       ]);       
       return redirect(route('parents'));
 
     } 
 }

 


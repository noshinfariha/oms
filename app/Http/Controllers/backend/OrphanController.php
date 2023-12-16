<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Orphan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class OrphanController extends Controller

{
    public function list()
    {

        $orphansdata = Orphan::paginate(3);
        return view("Backend.pages.orphans.orphan", compact('orphansdata'));
    }
    public function form()
    {
        return view("Backend.pages.orphans.form");
    }

    public function delete($id)
    {
        $orphanDelete = Orphan::find($id);

        if ($orphanDelete) {
            $orphanDelete->delete();
        }

        return redirect()->route('orphan');
    }

    public function edit($id)
    {
        $orphanEdit = Orphan::find($id);
        return view('Backend.pages.orphans.edit', compact('orphanEdit'));
    }

    public function update(Request $request, $id)
    {
        $orphanEdit = Orphan::find($id);
        if ($orphanEdit) {

              $fileName=$orphanEdit->image;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();               
                $file->move("uploads",$fileName);
      
            }


            $orphanEdit->update([
                'orphan_name' => $request->orphan_name,
                'age' => $request->age,
                'status' => $request->status,
                'image' => $fileName,
                'gender'=>$request->gender
            ]);
            return redirect()->route('orphan');
        }
    }


    public function store(Request $fariha)
{ //dd($fariha->all());
    {
         $validate = validator::make($fariha->all(),[
            'status'=>'required', 
            


         ]);

        // if($validate->fails()){
            // return redirect()->back();
         } 
    {
        $fileName = null;
        if ($fariha->hasFile('image')) {
            $file = $fariha->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            // $destination = "uploads";
            // $file->move($destination, $fileName);
        }
            $file->move("uploads", $fileName);
        }
       // dd($fariha->all());    
        Orphan::create([
            'orphan_name' => $fariha->orphan_name,
            'status' => $fariha->status,
            'age' => $fariha->age,
            'image' => $fileName,
            'gender' => $fariha->gender,
        ]);

        return redirect()->route('orphan');
    

    }

    public function view($id){

        $orphansdata = Orphan::find($id);
        return view('Backend.pages.orphans.view', compact('orphansdata'));

    }
}

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

        $orphansdata=Orphan::paginate(3);
        return view("Backend.pages.orphans.orphan",compact('orphansdata'));
    }
    public function form()
    {
        return view("Backend.pages.orphans.form");
    }
    public function store(Request $fariha)

    {
        //  $validate = validator::make($fariha->all(),[
        //     'image'=>'required', 
        //     'date'=>'required'
    

        //  ]);

        //  if($validate->fails()){
        //      return redirect()->back();
        //  } 
$fileName = null;
if ($fariha->hasFile('abc')) 
{
  $file = $fariha->file('abc');
  $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
  // $destination = "uploads";
  // $file->move($destination, $fileName);
  
  $file->move("uploads", $fileName);

}
 // dd($fariha->all());    
       Orphan::create([
        'orphan_name'=>$fariha->orphan_name,
        'status'=>$fariha->status,
        'address'=>$fariha->address,
        'date'=> $fariha->date,
        'photo'=>$fileName,
       'religion'=>$fariha->religion,
        'gender'=>$fariha->gender,
  ]);       

  return redirect()->route('orphan');
 
 }
 
 }
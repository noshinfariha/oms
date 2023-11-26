<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function list(){
        $staffdata=Staff::paginate(3);
        return view("Backend.pages.staff.staff",compact('staffdata'));
    }
    public function form(){
        return view("Backend.pages.staff.form");
    }

    public function delete($id)
    {
        $staffDelete = Staff::find($id);

        if($staffDelete)
        {
            $staffDelete->delete();
        }

        return redirect()->route('staff');
    }

    public function staffdelete($id)
    {
        $staffDelete = Staff::find($id);

        if($staffDelete)
        {
            $staffDelete->delete();
        }

        return redirect()->route('orphan');
    }
        public function store(Request $noshin){

            $fileName = null;
if ($noshin->hasFile('image')) 
{
  $file = $noshin->file('image');
  $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
  // $destination = "uploads";
  // $file->move($destination, $fileName);
  
  $file->move("uploads", $fileName);

}
            //dd($noshin ->all());
            Staff::create([
                'full_name'=>$noshin->fullname,
                'email'=>$noshin->email,
                'phone'=> $noshin->phone,
                'address'=>$noshin->address,
               'image'=>$fileName

          ]);       
               return redirect(route('staff'));
    }

}

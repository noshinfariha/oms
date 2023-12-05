<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return redirect()->route('staff');
    }

    public function edit($id)
{
    $staffEdit = Staff::find($id);
    return view('Backend.pages.staff.edit', compact('staffEdit'));
}

public function update(Request $request, $id)
{
    $staffEdit = Staff::find($id);
    if ($staffEdit) {

          $fileName=$staffEdit->image;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();               
            $file->move("uploads",$fileName);
  
        }


        $staffEdit->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            
        ]);
        return redirect()->route('staff');
    }
}

        public function store(Request $noshin){

            {
                $validate = validator::make($noshin->all(),[
                   'email'=>'required', 
                   
       
       
                ]);
       
                if($validate->fails()){
                    return redirect()->back();
                } 

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


          ]);       
               return redirect(route('staff'));
    }
        }
    public function view($id){

        $staffdata = Staff::find($id);
        return view('Backend.pages.staff.view', compact('staffdata'));

}
}

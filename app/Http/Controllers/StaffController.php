<?php

namespace App\Http\Controllers;

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
        public function store(Request $noshin){
            //dd($noshin ->all());
            Staff::create([
                'full_name'=>$noshin->fullname,
                'email'=>$noshin->email,
                'password'=>$noshin->password,
                'phone'=> $noshin->phone,
                'address'=>$noshin->address,
               'date'=>$noshin->date,
              'image'=>$noshin->image,
              'gender'=>$noshin->radio,
              'status'=>$noshin->status,

          ]);       
               return redirect(url('/staffs/list'));
    }

}

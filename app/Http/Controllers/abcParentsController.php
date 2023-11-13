<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Illuminate\Http\Request;


class abcParentsController extends Controller
{
    public function list(){
        $fariha=Parents::paginate(3);
         return view("Backend.pages.abcParents.parent",compact('fariha'));
 
     }
     public function form()
     {
         return view("Backend.pages.abcParents.form");
     }
 
     public function store (Request $noshin)
     {
             //dd($noshin ->all());
             Parents::create([
             'full_name'=>$noshin->full_name,
             'email'=>$noshin->email,
             'password'=>$noshin->password,
             'phone'=> $noshin->phone,
             'address'=>$noshin->address,
            'image'=>$noshin->image,
             'status'=>$noshin->status,
       ]);       
       return redirect(url('/parents/list'));
 
     } 
 }

 


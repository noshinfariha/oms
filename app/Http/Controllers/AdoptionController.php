<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdoptionController extends Controller
{
public function list(){
    $adoptionsdata=Adoption::paginate(3);
    return view("Backend.pages.adoption.adoption",compact('adoptionsdata'));

}
public function form(){
    return view("Backend.pages.adoption.form");

} 
public function store (Request $noshin){

       $validate=validator::make($noshin->all(),[
             'adoption_id'=>'required', 
            
         ]);

          if($validate->fails()){
              return redirect()->back();
        } 
  // dd($noshin ->all());
    Adoption::create([
        'orphan_id'=>$noshin->orphan_id,
        'adoption_id'=>$noshin->adoption_id,
        'parents_id'=>$noshin->parents_id,
        'adoption_date'=> $noshin->adoption_date,
    
  ]);       
  return redirect()->route('hhh');


} 
}  




<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
public function list(){
    $adoptionsdata=Adoption::all();
    return view("Backend.pages.adoption.adoption",compact('adoptionsdata'));

}
public function form(){
    return view("Backend.pages.adoption.form");

} 
public function store (Request $noshin){
    //dd($noshin ->all());
    Parent::create([
        'orphan_id'=>$noshin->orphan_id,
        'adoption_id'=>$noshin->adoption_id,
        'parents_id'=>$noshin->parents_id,
        'adoption_date'=> $noshin->adoption_date,
    
  ]);       
  return redirect(url('/adoptions/list'));

} 
}  




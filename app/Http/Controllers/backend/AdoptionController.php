<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
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

public function delete($id)
    {
        $adoptionDelete = Adoption::find($id);

        if ($adoptionDelete) {
            $adoptionDelete->delete();
        }

        return redirect()->route('adoption');
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
  return redirect()->route('adoption');


} 
}  




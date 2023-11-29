<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use App\Models\Orphan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdoptionController extends Controller
{
public function list(){
    
    $adoptionsdata=Adoption::with('orphans')->paginate(3);//relation
    return view("Backend.pages.adoption.adoption",compact('adoptionsdata'));

}
public function form(){
    $orphans = Orphan::all();
    return view("Backend.pages.adoption.form",compact('orphans'));//to take data from model

} 

public function delete($id)
    {
        $adoptionDelete = Adoption::find($id);

        if ($adoptionDelete) {
            $adoptionDelete->delete();
        }

        return redirect()->route('adoption');
    }

    public function edit($id)
    {
        $adoptionEdit = Adoption::find($id);
        return view('Backend.pages.adoption.edit', compact('adoptionEdit'));
    }

    public function update(Request $request, $id)
    {
        $adoptionEdit = Adoption::find($id);
        if ($adoptionEdit) {

              $fileName=$adoptionEdit->image;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();               
                $file->move("uploads",$fileName);
      
            }


            $adoptionEdit->update([
                'orphan_id' => $request->orphan_id,
                'adoption_id' => $request->adoption_id,
                'parents_id' => $request->parents_id,
                'adoption_date'=>$request->adoption_date 
            ]);
            return redirect()->route('adoption');
        }
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




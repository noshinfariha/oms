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
public function view(){
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
    dd($request->all());
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

//   dd($noshin ->all());

       $validate=validator::make($noshin->all(),[
             'applicant_name'=>'required', 
             'phone'=>'required', 
             'address'=>'required', 
             'date_of_birth'=>'required', 
             'occupation'=>'required', 
             'source_income'=>'required'            
         ]);

          if($validate->fails()){
              return redirect()->back();
        } 
  // dd($noshin ->all());
    Adoption::create([
        'applicant_name'=>$noshin->applicant_name,
        'phone'=>$noshin->phone,
        'address'=>$noshin->address,
        'date_of_birth'=> $noshin->date_of_birth,
        'occupation'=> $noshin->occupation,
        'source_income'=> $noshin->source_income,
        'marital_status'=> $noshin->marital_status,
        'reasons_child'=> $noshin->reasons_child,
    
  ]);       
  return redirect()->route('forntend.orphon.list');


}

}  



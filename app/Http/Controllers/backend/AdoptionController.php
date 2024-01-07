<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use App\Models\Orphan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdoptionController extends Controller
{
    public function accept($id)
    {
        $adoption = Adoption::find($id);
        $adoption->update([
        'status'=>'adopted'
        ]);
        
        Orphan::find($adoption->orphan_id)->update([
            'status'=>'adopted'
         ]);

        notify()->success('Adoption Successfull');
        return redirect()->route('adoption');
    }
    public function reject($id)
    {
        $adoption = Adoption::find($id);
        $adoption->update([
        'status'=>'rejected'
        ]);
        
        Orphan::find($adoption->orphan_id)->update([
            'status'=>'rejected'
         ]);

        notify()->success('Adoption failed');
        return redirect()->route('adoption');


    }
    public function print()
    {

        $adoptionsdata = Adoption::with('orphans')->paginate(3); //relation
        return view("Backend.pages.adoption.print", compact('adoptionsdata'));
    }
    public function list()
    {

        $adoptionsdata = Adoption::with('orphans')->paginate(3); //relation
        return view("Backend.pages.adoption.adoption", compact('adoptionsdata'));
    }
    public function view($id)
    {
        $orphans = Orphan::find($id);
        //   dd($orphans );
        return view("Backend.pages.adoption.form", compact('orphans','id')); //to take data from model

    }

    public function adoptupdate($id)
    {
        $edit = Adoption::find($id);
        //   dd($orphans );
        return view("Backend.pages.adoption.update", compact('edit')); //to take data from model

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
        // dd($request->all());
        $adoptionEdit = Adoption::find($id);
        if ($adoptionEdit) {

            $fileName = $adoptionEdit->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->move("uploads", $fileName);
            }


            $adoptionEdit->update([
            'orphan_id' => $request->orphan_id,
            'applicant_name' => $request->applicant_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'occupation' => $request->occupation,
            'source_income' => $request->source_income,
            'marital_status' => $request->marital_status,
            'gd_number' => $request->gd_number,
            'gd_form' => $request->gd_form,
            'status' => $request->status,

            ]);
            return redirect()->route('adoption');
        }
    }
    public function store(Request $noshin)
    {  
    
        $validate = validator::make($noshin->all(), [
            'phone' => 'required|max:15|min:11',

        ]);

        if ($validate->fails()) {
            notify()->error($validate->getMessageBag()->first()); 
            return redirect()->back();
        }
        
        $fileName = null;
        if ($noshin->hasFile('gd_form')) {
            $file = $noshin->file('gd_form');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->move("uploads", $fileName);
        }
        
        // dd($noshin ->all());
        Adoption::create([
            'orphan_id' => $noshin->orphan_id,
            'user_id' => auth()->user()->id,
            'applicant_name' => $noshin->applicant_name,
            'phone' => $noshin->phone,
            'address' => $noshin->address,
            'occupation' => $noshin->occupation,
            'source_income' => $noshin->source_income,
            'marital_status' => $noshin->marital_status,
            'gd_number' => $noshin->gd_number,
            'gd_form' => $fileName,
            'status' => 'pending',
             ]);

            

        return redirect()->route('forntend.orphon.list');
    }
    public function adoptionEdit($id){
        
        
        $data = Adoption::with('orphans')->find($id);
    
        return view("Backend.pages.adoption.adoption", compact('data'));

  
}
public function cancel($id){
    $adoption = Adoption::find($id);
    $adoption->update([
    'status'=>'cancel'
    ]);
    
    Orphan::find($adoption->orphan_id)->update([
        'status'=>'cancel'
     ]);

    notify()->success('Adoption Cancel');
    return redirect()->route('user.profile');
}

public function adoptupdatedate(Request $request,$id){
    $fileName = null;
    if ($request->hasFile('gd_form')) {
        $file = $request->file('gd_form');
        $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
        $file->move("uploads", $fileName);
    }
    $update = Adoption::find($id);
    $update->update([

            'orphan_id'         => $request->orphan_id,
            'applicant_name'    => $request->applicant_name,
            'phone'             => $request->phone,
            'address'           => $request->address,
            'occupation'        => $request->occupation,
            'source_income'     => $request->source_income,
            'marital_status'    => $request->marital_status,
            'gd_number'         => $request->gd_number,
            'gd_form'           => $fileName,
            'status'            => 'pending',

    ]);
    notify()->success('success','Adoption updated successfully!');
    return redirect()->route('user.profile');
}
}

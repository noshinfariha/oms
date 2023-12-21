<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    public function print()
    { 
        $accountsdata=Account::all();
        return view("Backend.pages.account.print",compact('accountsdata'));
    }
    public function list()
    { 
        $accountsdata=Account::all();
        return view("Backend.pages.account.account",compact('accountsdata'));
    }
    public function form()
    {
        return view("Backend.pages.account.form");
    }

    
    public function delete($id)
    {
        $accountDelete = Account::find($id);

        if ($accountDelete) {
            $accountDelete->delete();
        }

        return redirect()->route('account');
    }

    public function edit($id)
    {
        $accountEdit = Account::find($id);
        return view('Backend.pages.account.edit', compact('accountEdit'));
    }

    public function update(Request $request, $id)
    {
        $accountEdit = Account::find($id);
        if ($accountEdit) {

              $fileName=$accountEdit->image;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();               
                $file->move("uploads",$fileName);
      
            }


            $accountEdit->update([
                'orphan_name' => $request->orphan_name,
                'age' => $request->age,
                'status' => $request->status,
                'image' => $fileName,
                'gender'=>$request->radio 
            ]);
            return redirect()->route('account');
        }
    }


 public function store(Request $fariha)
    {
      // dd($fariha->all());
       Account::create([
        'orphan_name' => $fariha->orphan_name,
            'status' => $fariha->status,
            'age' => $fariha->age,
            'image' => $fariha->image,
            'gender' => $fariha->radio,
  ]);       
  return redirect()->route('account');
}
}

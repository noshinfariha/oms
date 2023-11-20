<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ExpenseController extends Controller
{
    public function list(){
        $expensedata=Expense::paginate(3);
        return view('Backend.pages.expense.expense',compact('expensedata'));
    }
    public function form(){
        return view('Backend.pages.expense.form'); 
}

public function delete($id)
    {
        $expenseDelete = Expense::find($id);

        if($expenseDelete)
        {
            $expenseDelete->delete();
        }

        return redirect()->route('expense');
    }

public function store (Request $noshin){
      
    $validate=validator::make($noshin->all(),[
        'expense_title'=>'required', 
        
 ]);

     if($validate->fails()){
         return redirect()->back();
     } 
    // dd($noshin ->all());
    Expense::create([
        'expense_title'=>$noshin->expense_title,
        'expense_amount'=>$noshin->expense_amount,
        'expense_description'=>$noshin->expense_description,
       
  ]);       
  return redirect()->route('expense');


    }
}


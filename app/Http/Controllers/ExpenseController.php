<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function list(){
        $expensedata=Expense::all();
        return view("Backend.pages.expense.expense",compact('expensedata'));
    }
    public function form(){
        return view("Backend.pages.expense.form"); 
}
public function store (Request $noshin){
    dd($noshin ->all());
    Expense::create([
        'expense_title'=>$noshin->title,
        'expense_amount'=>$noshin->amount,
        'expense_description'=>$noshin->expense_description,
       
  ]);       
  return redirect(url('/expense/list'));

    }
}


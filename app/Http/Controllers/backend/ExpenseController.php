<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Expense;
use App\Models\Expensecategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ExpenseController extends Controller
{
    public function print()
    {
        $expensedata = Expense::paginate(3);
        return view('Backend.pages.expense.print', compact('expensedata'));
    }
    public function list()
    {
        $expensedata = Expense:: with(['category'])->paginate(3);
        return view('Backend.pages.expense.expense', compact('expensedata'));
    }
    public function form()

    {
        $expensecategories=Expensecategory::all();
        return view('Backend.pages.expense.form', compact ('expensecategories'));
    }

    public function delete($id)
    {
        $expenseDelete = Expense::find($id);

        if ($expenseDelete) {
            $expenseDelete->delete();
        }

        return redirect()->route('expense');
    }

    public function edit($id)
    {
        $expenseEdit = Expense::find($id);
        return view('Backend.pages.expense.edit', compact('expenseEdit'));
    }

    public function update(Request $request, $id)
    {
        $expenseEdit = Expense::find($id);
        
            $expenseEdit->update([
                'title' => $request->title,
                'category_id' => $request->category_id,
                'expense_by' => $request->expense_by,
                'description' => $request->description,
                'amount' => $request->amount,
                'date' => $request->date,

            ]);
            return redirect()->route('expense');
        
    }

    public function store(Request $noshin)
    {

        $validate = validator::make($noshin->all(), [
            'title' => 'required|string|max:255',
            'expense_by' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'date' => 'required|date',
            'category_id' => 'required|numeric|min:0',



        ]);

        if ($validate->fails()) {
            notify()->error($validate->getMessageBag()->first()); 
            return redirect()->back();
        }
        // dd($noshin ->all());
        $acc = Account::first();
        if ($acc->amount >= $noshin->amount) {
            $acc->decrement('amount',  $noshin->amount);            
            Expense::create([

                'title' => $noshin->title,
                'category_id' => $noshin->category_id,
                'expense_by' => $noshin->expense_by,
                'description' => $noshin->description,
                'amount' => $noshin->amount,
                'date' => $noshin->date,

            ]);
          
            notify()->success('Expence done successfully');
            return redirect()->route('expense');
        } else {
            notify()->error('You dont have sufficient balance');
            return redirect()->back();
        }
    }
}

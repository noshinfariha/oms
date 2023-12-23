<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Expense;
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
        $expensedata = Expense::paginate(3);
        return view('Backend.pages.expense.expense', compact('expensedata'));
    }
    public function form()
    {
        return view('Backend.pages.expense.form');
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
        if ($expenseEdit) {

            $fileName = $expenseEdit->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
                $file->move("uploads", $fileName);
            }
            $expenseEdit->update([
                'expense_id' => $request->expense_id,
                'title' => $request->title,
                'category_id' => $request->category_id,
                'expense_by' => $request->expense_by,
                'description' => $request->description,
                'amount' => $request->amount,
                'date' => $request->date,

            ]);
            return redirect()->route('expense');
        }
    }

    public function store(Request $noshin)
    {

        $validate = validator::make($noshin->all(), [
            // 'Title'=>'required', 

        ]);

        if ($validate->fails()) {
            return redirect()->back();
        }
        // dd($noshin ->all());
        $acc = Account::first();
        if ($acc->amount >= $noshin->amount) {
            $acc->decrement('amount',  $noshin->amount);            
            Expense::create([
                'expense_id' => $noshin->expense_id,
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

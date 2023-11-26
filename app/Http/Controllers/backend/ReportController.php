<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list()
    {
        $reportsdata=Report::all();
        return view("Backend.pages.report.report",compact('reportsdata'));
    }

public function form()
{
    return view("Backend.pages.report.form");
}

public function store(Request $fariha)
{
  // dd($fariha->all());
   Report::create([
    'orphan_name' => $fariha->orphan_name,
        'status' => $fariha->status,
        'age' => $fariha->age,
        'image' => $fariha->image,
        'gender' => $fariha->radio,
]);       
return redirect()->route('report');
}
}
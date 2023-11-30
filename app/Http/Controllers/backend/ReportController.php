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
public function delete($id)
{
    $reportDelete = Report::find($id);

    if ($reportDelete) {
        $reportDelete->delete();
    }

    return redirect()->route('report');
}

public function edit($id)
{
    $reportEdit = Report::find($id);
    return view('Backend.pages.report.edit', compact('reportEdit'));
}

public function update(Request $request, $id)
{
    $reportEdit = Report::find($id);
    if ($reportEdit) {

          $fileName=$reportEdit->image;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();               
            $file->move("uploads",$fileName);
  
        }


        $reportEdit->update([
            'orphan_name' => $request->orphan_name,
            'age' => $request->age,
            'status' => $request->status,
            'image' => $fileName,
            'gender'=>$request->gender
        ]);
        return redirect()->route('report');
    }
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
<?php

namespace App\Http\Controllers\backend;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Adoption;
use App\Models\Orphan;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{

public function report()
{
    //dd('yes');
    $applicants = Adoption::all();

    return view('backend.pages.report.reports',compact('applicants'));
}

public function reportSearch(Request $request)
{

//dd('yes');
    $validator = Validator::make($request->all(), [
        'from_date'    => 'required|date',
        'to_date'      => 'required|date|after:from_date',
    ]);

    if($validator->fails())
    {

       notify()->error('From date and to date required and to should greater then from date.');
        return redirect()->back();
    }



   $from=$request->from_date;
   $to=$request->to_date;


//       $status=$request->status;


    $applicants=Adoption::whereBetween('created_at', [$from, $to])->get();
    return view('backend.pages.report.reports',compact('applicants'));
}

    public function reportorphan()
{
    //dd('yes');
    $orphans = Orphan::all();

    return view('backend.pages.report.orphans',compact('reportorphanSearch'));
}

public function reportorphanSearch(Request $request)
{

//dd('yes');
    $validator = Validator::make($request->all(), [
        'from_date'    => 'required|date',
        'to_date'      => 'required|date|after:from_date',
    ]);

    if($validator->fails())
    {

       notify()->error('From date and to date required and to should greater then from date.');
        return redirect()->back();
    }

    $from=$request->from_date;
   $to=$request->to_date;


//       $status=$request->status;


    $orphans=Orphan::whereBetween('created_at', [$from, $to])->get();
    return view('Backend.pages.report.orphans',compact('orphans'));

}
}


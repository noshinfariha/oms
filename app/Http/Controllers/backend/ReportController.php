<?php

namespace App\Http\Controllers\backend;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Adoption;
use App\Models\Donation;
use App\Models\Orphan;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{

public function report()
{
    
    $applicants = Adoption::all();

    return view('Backend.pages.report.reports',compact('applicants'));
}

public function reportSearch(Request $request)
{


// dd($request->all());
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
    return view('Backend.pages.report.reports',compact('applicants'));
    
}
public function donationreport()
{
    //dd('yes');
    $donations = Donation::all();

    return view('Backend.pages.report.reports',compact('donations'));
}

public function reportdonationSearch(Request $request)
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


    $donations=Donation::whereBetween('created_at', [$from, $to])->get();
    return view('Backend.pages.report.reports',compact('donations'));
}

public function orphanreport()
{
    //dd('yes');
    $orphans = Orphan::all();

    return view('Backend.pages.report.reports',compact('orphans'));
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
    return view('Backend.pages.report.reports',compact('orphans'));
}



  


}



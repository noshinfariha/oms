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
}

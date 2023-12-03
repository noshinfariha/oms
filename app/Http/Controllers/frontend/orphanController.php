<?php

namespace App\Http\Controllers\frontend;

use App\Models\Orphan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orphanController extends Controller
{
    public function form(){
        $orphansdata = Orphan::all();
        return view('Frontend.pages.pages.orphan.orphan', compact('orphansdata'));
    }
    
    public function view($id){
        $orphansdata = Orphan::find($id);
        return view('Frontend.pages.pages.orphan.view', compact('orphansdata'));
    }
}

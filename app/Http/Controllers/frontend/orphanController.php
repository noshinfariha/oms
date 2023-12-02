<?php

namespace App\Http\Controllers\frontend;

use App\Models\Orphan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orphanController extends Controller
{
    public function form(){
        $orphansdata = Orphan::paginate(3);
        return view('Frontend.pages.pages.orphan.orphan', compact('orphansdata'));
    }
}

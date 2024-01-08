<?php

namespace App\Http\Controllers\frontend;

use App\Models\Orphan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Adoption;

class orphanController extends Controller
{
    public function form(){
        $orphansdata = Orphan::all();
  
        // dd($orphansdata);
        return view('Frontend.pages.pages.orphan.orphan', compact('orphansdata'));
    }
    
    public function view($id){
        $orphansdata = Orphan::find($id);
        
        return view('Frontend.pages.pages.orphan.view', compact('orphansdata'));
    }

    public function search(Request $request)
    {
  
        if($request->search)
        {

            $orphans=Orphan::where('orphan_name','LIKE','%'.$request->search.'%')->get();
        }else{
            $orphans=Orphan::all();
        }


        return view('Frontend.pages.pages.orphan.orphan-search',compact('orphans'));
        
    }

}



<?php

namespace App\Http\Controllers\frontend;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class donorController extends Controller
{
    
    public function frontend_donor_list(){
        $donors=Donation::paginate(3);


        // dd($donors);
        return view("Frontend.pages.pages.donor.donor",compact('donors'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function list(){
        return view("Backend.pages.donation.donation");
    }
    }


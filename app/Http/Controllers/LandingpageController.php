<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function interface(){
        return view('landingpage.interface');
    }
}

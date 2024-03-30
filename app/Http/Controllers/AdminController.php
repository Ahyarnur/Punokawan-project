<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function aktivitasadmin(){
        return view('admin.aktivitasadmin');
    }

    public function wargaadmin(){
        return view('admin.wargaadmin');
    }

    public function pengumumanadmin(){
        return view('admin.pengumumanadmin');
    }
}

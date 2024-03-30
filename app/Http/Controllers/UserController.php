<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function aktivitasuser(){
        return view('user.aktivitasuser');
    }

    public function wargauser(){
        return view('user.wargauser');
    }

    public function pengumumanuser(){
        return view('user.pengumumanuser');
    }
}

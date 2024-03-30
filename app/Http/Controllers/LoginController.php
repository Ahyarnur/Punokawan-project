<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only("email", "password"))) {
            $user = Auth::user();
            if($user->level === 'admin') {
              return redirect("/aktivitasadmin");
            } else {
              return redirect("/aktivitasuser");
            }
          }        
          return redirect('login');
    }
}

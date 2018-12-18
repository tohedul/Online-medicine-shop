<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function index(Request $req){
      //clear user data an switch to Home
    //  $req->session->forget('un');
      $req->session()->flush();
      return redirect()->route('login.index');

    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('register');
    }

    public function register(Request $req)
    {
        

        $user=new User;
        $user->empName= $req->empName;
        $user->username= $req->username;
        $user->contactNo= $req->contactNo;
        $user->password= $req->password;
        $user->type= 'customer';
        $user->save();

        if($user->save())
        {
         

              return redirect()->route('login.index');
          

        }
        else {
         
         return redirect()->route('register.index');
        }


    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;


class loginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function verify(Request $req)
    {
        $uname= $req->username;
        $pass= $req->password;

        $user=User::where('username', $uname)
                  ->where('password', $pass)
                  ->first();

        if($user !=null)
        {
          
          $req->session()->put('logged', $user);
        //  $req->session()->put('un', $user->username);
         if($user->type=='admin')
          {

              return redirect()->route('home.admin');
          }
          else if($user->type=='customer')
          {

            return redirect()->route('home.customer');
          }

        }
        else {
          $req->session()->flash('message', 'Invalid username or password');
         return redirect()->route('login.index');
        }


    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\Category;
use App\Models\User;
use App\Models\Movie;





class HomeController extends Controller
{
   
    public function index()
    {
        return view('home');

    }

    public function login()
    {
       return view('login');
    }
    public function log_in(Request $request)
    {
        $user           = User::where('email',$request->email)->where('password', encrypt($request->password))->first();
        return redirect()->route('home');  
    }

    public function sign_in()
    {

        return view('register');


    }
    public function register(Request $request)
    {
        $user                         = new User;
        $user->name                   = $request->name;
        $user->email                  = $request->email;
        $user->password               = $request->password;
        $user->birthday               = $request->birthday;
        $user->remember_token          = $request->_token;
        $user->email_verified_at      = date('Y-m-d H:m:s');
        $user->save();

        return redirect()->route('home');

    }

    

  

}

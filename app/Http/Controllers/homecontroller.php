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

    }

    public function login()
    {
       return view('login');
    }

    public function register(Request $request)
    {

    }

    

  

}

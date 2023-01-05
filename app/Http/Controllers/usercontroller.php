<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\Category;
use App\Models\User;
use App\Models\Movie;





class UserController extends Controller
{
   
    public function index()
    {

        $users        = User::paginate(15);
        return view('user_list' , compact('users'));

    }

    public function create()
    {
       return view('create_user');
    }
    

    public function store(Request $request)
    {

        $user                         = new User;
        $user->name                   = $request->name;
        $user->email                  = $request->email;
        $user->password               = $request->password;
        $user->birthday               = $request->birthday;
        $user->remeber_token          = $request->_token;
        $user->email_verified_at      = date('Y-m-d H:m:s');
        $user->save();

        return redirect()->route('user.all');



    }

  

}

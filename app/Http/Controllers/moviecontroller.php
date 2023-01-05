<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\Category;
use App\Models\User;
use App\Models\Movie;





class MovieController extends Controller
{

    public function index()
    {

        $movies        = Movie::paginate(15);
    
        return view('all_movies' , compact('movies'));

    }

    public function create()
    {
        return view('create_movie');
    }
    

    public function store(Request $request)
    {



    }
}

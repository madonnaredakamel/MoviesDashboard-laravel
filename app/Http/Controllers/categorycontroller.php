<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\Category;
use App\Models\User;
use App\Models\Movie;





class CategoryController extends Controller
{
   
    public function index()
    {

        $categories        = Category::paginate(15);
        return view('all_categories' , compact('categories'));

    }

    public function create()
    {
       return view('create_category');
    }
    

    public function store(Request $request)
    {

        


    }

  

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Category extends Model
{
    protected $table                = 'category';
    protected $fillable             = ['name' , 'id'];   


    public function movie(){
    	return $this->hasMany(Movie::class);
    }
}

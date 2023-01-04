<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Movie extends Model
{
    protected $table                = 'movies';
    public function category(){
    	return $this->belongsTo(Category::class);
    }
}

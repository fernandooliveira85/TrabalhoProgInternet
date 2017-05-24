<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_Discipline extends Model
{
    protected $fillable=['period'];

    public function courses(){
    	return $this->belongsTo('App\Course');
    }

    public function disciplines(){
    	return $this->belongsTo('App\Discipline');
    }
}

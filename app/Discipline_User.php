<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline_User extends Model
{
    public function disciplines(){
    	return $this->belongsTo('App\Discipline');
    }

    public function users(){
    	return $this->belongsTo('App\User');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    protected $fillable=['name'];

    public function works()
    {
    	//Tradução: hasMany = 'tem muitos'
    	return $this->hasMany('App\Work');
    }
}

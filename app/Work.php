<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title', 'score', 'deadline', 'comment'
    ];

    public function discipline()
    {
    	//Tradução: belongsTo = 'pertence a'
    	return $this->belongsTo('App\Discipline');
    }

    public function files(){
    	return $this->hasMany('App\File');
    }
}

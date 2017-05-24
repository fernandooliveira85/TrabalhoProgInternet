<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable=['protocol'];

    public function works(){
    	return $this->belongsTo('App\Work');
    }
}

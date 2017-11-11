<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    
    /**
    * The artist that owns this album
    */
    public function getArtist(){
    	return $this->belongsTo('App\Artist');
    }
}

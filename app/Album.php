<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

	protected $fillable = ['title', 'imgUrl', 'artist_id'];
    
    /**
    * The artist that owns this album
    */
    public function artist(){
    	return $this->belongsTo('App\Artist');
    }
}

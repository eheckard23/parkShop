<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

	protected $fillable = ['album_title', 'img_url', 'artist_id'];
    
    /**
    * The artist that owns this album
    */
    public function artist(){
    	return $this->belongsTo('App\Artist');
    }

    /**
    * The tracks this album owns
    */
    public function tracks(){
    	return $this->hasMany('App\Track');
    }
}

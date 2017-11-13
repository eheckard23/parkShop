<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

	protected $fillable = ['album_title', 'img_url', 'artist_id', 'album_genre', 'release_date', 'in_stock', 'price'];
    
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

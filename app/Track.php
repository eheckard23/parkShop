<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = ['track_title', 'track_length', 'album_id'];
    
    /**
    * The artist that owns this album
    */
    public function album(){
    	return $this->belongsTo('App\Album');
    }
}

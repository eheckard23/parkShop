<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

	protected $fillable = ['artist_name'];

    /**
    * Get the albums for this artist
    */
    public function getAlbums(){
    	return $this->hasMany('App\Album');
    }
}

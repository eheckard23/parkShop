<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

	protected $fillable = ['artist_name', 'album_id'];

    /**
    * Get the albums for this artist
    */
    public function albums(){
    	return $this->hasMany('App\Album');
    }
}

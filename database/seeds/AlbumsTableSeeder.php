<?php

use Illuminate\Database\Seeder;
use App\Album;
use App\Artist;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $artist = Artist::find(1);

    	$album = new Album([
        	'album_title' => 'A Moon Shaped Pool',
        	'img_url' => 'https://img.discogs.com/sCLE6nzIsI6JTsOlVV4tzYkC17Y=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-8581632-1466176624-5077.jpeg.jpg',
        	'artist_id' => $artist['id']
        ]);

        $album->save();
    }
}

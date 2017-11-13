<?php

use Illuminate\Database\Seeder;
use DB;
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

    	$album = new Album([
        	'album_title' => 'A Moon Shaped Pool',
        	'img_url' => 'https://img.discogs.com/sCLE6nzIsI6JTsOlVV4tzYkC17Y=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-8581632-1466176624-5077.jpeg.jpg',
        	'artist_id' => DB::table('artists')->where('artist_name', '=', 'Radiohead')->value('id'),
            'release_date' => 2016,
            'in_stock' => 2,
            'price' => 27,
            'album_genre' => 'Rock'

        ]);

        $album->save();

        $album = new Album([
            'album_title' => 'The Desaturating Seven',
            'img_url' => 'https://consequenceofsound.files.wordpress.com/2017/07/primus-the-desaturating-seven-album-artwork.jpg?quality=80',
            'artist_id' => DB::table('artists')->where('artist_name', '=', 'Primus')->value('id'),
            'release_date' => 2017,
            'in_stock' => 1,
            'price' => 27,
            'album_genre' => 'Rock'

        ]);

        $album->save();

        $album = new Album([
            'album_title' => 'Painted Ruins',
            'img_url' => 'http://images.genius.com/41fd9e8a89a7ec96dd1b343ae08da775.1000x1000x1.jpg',
            'artist_id' => DB::table('artists')->where('artist_name', '=', 'Grizzly Bear')->value('id'),
            'release_date' => 2017,
            'in_stock' => 1,
            'price' => 25,
            'album_genre' => 'Indie'

        ]);

        $album->save();

        $album = new Album([
            'album_title' => 'The Dark Side of the Moon',
            'img_url' => 'http://www.billboard.com/files/media/Pink-Floyd-Dark-Side-of-the-Moon-2017-billboard-1240.jpg',
            'artist_id' => DB::table('artists')->where('artist_name', '=', 'Pink Floyd')->value('id'),
            'release_date' => 1973,
            'in_stock' => 1,
            'price' => 40,
            'album_genre' => 'Rock'

        ]);

        $album->save();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Track;
use App\Album;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$album = Album::find(1);

        $track = new Track([
        	'track_title' => 'Burn the Witch',
        	'track_length' => '3:41',
        	'album_id' => 1
        ]);

        $track->save();

        $track = new Track([
            'track_title' => 'Wasted Acres',
            'track_length' => '2:52',
            'album_id' => 2
        ]);

        $track->save();

        $track = new Track([
            'track_title' => 'The Valley',
            'track_length' => '4:43',
            'album_id' => 3
        ]);

        $track->save();
    }
}

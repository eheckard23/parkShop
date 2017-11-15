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
    	$tracks = [
            [
                'track_title' => 'Burn the Witch',
                'track_length' => '3:41',
                'album_id' => 1
            ],
            [
                'track_title' => 'Daydreaming',
                'track_length' => '6:24',
                'album_id' => 1
            ],
            [
                'track_title' => 'Decks Dark',
                'track_length' => '4:41',
                'album_id' => 1
            ],
            [
                'track_title' => 'Desert Island Disk',
                'track_length' => '3:45',
                'album_id' => 1
            ],
            [
                'track_title' => 'Ful Stop',
                'track_length' => '6:07',
                'album_id' => 1
            ],
            [
                'track_title' => 'Glass Eyes',
                'track_length' => '2:53',
                'album_id' => 1
            ],
            [
                'track_title' => 'Identikit',
                'track_length' => '4:27',
                'album_id' => 1
            ],
            [
                'track_title' => 'The Numbers',
                'track_length' => '5:46',
                'album_id' => 1
            ],
            [
                'track_title' => 'Present Tense',
                'track_length' => '5:07',
                'album_id' => 1
            ],
            [
                'track_title' => 'Tinker Tailor Soldier Sailor Rich Man Poor Man Begger Man Thief',
                'track_length' => '5:04',
                'album_id' => 1
            ],
            [
                'track_title' => 'True Love Waits',
                'track_length' => '4:43',
                'album_id' => 1
            ]
        ];

        foreach($tracks as $track){
            Track::create($track);
        }
    }
}

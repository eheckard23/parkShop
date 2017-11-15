<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artist_name');
            $table->string('artist_site');
            $table->enum('artist_genre', ['Rock', 'Hip-Hop', 'Pop', 'Country', 'R&B', 'Latin', 'Classical', 'Jazz', 'Indie', 'Metal', 'Reggae', 'Soul', 'Punk', 'Blues', 'Funk', 'Electronic']);
            $table->text('artist_bio');
            $table->string('artist_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('artists');
    }
}

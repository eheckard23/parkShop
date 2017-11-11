<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('track_title');
            $table->string('track_length');
            $table->timestamps();
        });

        if(Schema::hasTable('albums')){
            Schema::table('tracks', function(Blueprint $table){
                $table->integer('album_id')->unsigned();
                $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tracks');
    }
}

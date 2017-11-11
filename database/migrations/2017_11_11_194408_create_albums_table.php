<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('album_title');
            $table->string('img_url');
            $table->timestamps();
        });

        if(Schema::hasTable('artists')){
            Schema::table('albums', function(Blueprint $table){
                $table->integer('artist_id')->unsigned();
                $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
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
        Schema::drop('albums');
    }
}

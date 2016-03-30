<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRockstarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rockstars', function (Blueprint $table) {
            // $table->increments('id');
            // $table->timestamps();
            $table->string('artistName');
            $table->string('birthName');
            $table->string('birthPlace');
            $table->string('birthDate');
            $table->string('bandName');
            $table->decimal('profilePic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rockstars');
    }
}

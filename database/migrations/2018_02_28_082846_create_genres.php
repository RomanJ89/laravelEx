<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('genres', function(Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->timestamps();
        });
    }

}

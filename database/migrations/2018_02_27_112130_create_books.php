<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('books', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('author');
          $table->text('resume');
          $table->integer('genre_id');
          $table->timestamps();
      });
    }

    public function down() {
      Schema::drop('books');
    }
}

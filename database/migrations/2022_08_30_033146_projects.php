<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // The title of the post
            $table->integer('order'); // The order of the items on the main page
            $table->integer('shown')->nullable(); // Bool if the post is displayed
            $table->integer('big')->nullable(); // If the poast is big = 4x4 grid
            $table->integer('location'); // The location of the post on the main page
            $table->integer('span'); // The col-span the post has on the main page
            $table->string('description')->nullable();
            $table->string('url')->nullable();
            $table->longText('svg')->nullable();
            $table->longText('img')->nullable();
            $table->longText('body')->nullable();
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
        Schema::dropIfExists('projects');
    }
}

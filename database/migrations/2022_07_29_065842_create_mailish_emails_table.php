<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailishEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailish_emails', function (Blueprint $table) {
            $table->id();
            $table->integer('to');
            $table->text('from');
            $table->text('subject');
            $table->longText('body');
            $table->integer('status'); // should house things like read/replied
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
        Schema::dropIfExists('mailish_emails');
    }
}

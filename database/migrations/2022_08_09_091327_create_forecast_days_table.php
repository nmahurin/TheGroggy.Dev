<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForecastDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forecast_days', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->nullable();
            $table->string('name')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->integer('is_daytime')->nullable();
            $table->integer('temperature')->nullable();
            $table->char('temperature_unit')->nullable();
            $table->string('temperature_trend')->nullable();
            $table->string('wind_speed')->nullable();
            $table->char('wind_direction')->nullable();
            $table->string('icon')->nullable();
            $table->string('short_forecast')->nullable();
            $table->longText('detailed_forecast')->nullable();
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
        Schema::dropIfExists('forecast_days');
    }
}

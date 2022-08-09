<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeolocationMetaDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('geolocation_meta_datas', function (Blueprint $table) {
            $table->id();
            $table->float('latitude');
            $table->float('longitude');
            $table->string('cwa')->nullable();
            $table->string('forecast_office')->nullable();
            $table->string('grid_id')->nullable();
            $table->integer('grid_x')->nullable();
            $table->integer('grid_y')->nullable();
            $table->string('forecast');
            $table->string('forecast_hourly');
            $table->string('forecast_grid_data')->nullable();
            $table->string('observation_stations')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('bearing')->nullable();
            $table->string('forecast_zone')->nullable();
            $table->string('county')->nullable();
            $table->string('fire_weather_zone')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('radar_station')->nullable();
            $table->float('elevation')->nullable();
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
        Schema::dropIfExists('geolocation_meta_datas');
    }
}

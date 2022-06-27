<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("brand", 50);
            $table->string("start_station", 100);
            $table->string("arrival_station", 100);
            $table->time("start_time");
            $table->time("arrival_time");
            $table->string("train_code", 6);
            $table->tinyInteger("num_carriages")->unsigned();
            $table->boolean("in_time");
            $table->boolean("cancelled");
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
        Schema::dropIfExists('trains');
    }
}

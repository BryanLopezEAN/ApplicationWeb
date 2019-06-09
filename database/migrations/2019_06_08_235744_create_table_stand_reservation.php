<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStandReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stand', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 100);
            $table->string('phone', 20);
            $table->dateTime('starEvent');
            $table->dateTime('endEvent');
            $table->longText('description');
            $table->string('scenarioType', 100);
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
        Schema::dropIfExists('stand');
    }
}

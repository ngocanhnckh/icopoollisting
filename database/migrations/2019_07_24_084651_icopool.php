<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Icopool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icopool', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('activeico');
            $table->string('numofparticipants');
            $table->string('tok-distr');
            $table->string('rating');
            $table->string('lang');
            $table->string('access');
            $table->string('created');
            $table->string('addr');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icopool');
    }
}

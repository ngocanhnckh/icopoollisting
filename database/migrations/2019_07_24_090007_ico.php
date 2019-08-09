<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('Product');
            $table->string('teamnpartner');
            $table->string('Market');
            $table->longText('Description');
            $table->string('mincap');
            $table->string('Commission');
            $table->string('bonus');
            $table->string('raised');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ico');
    }
}

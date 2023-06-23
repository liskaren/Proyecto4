<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Discription');

            $table->integer('productions_id')->unsigned();
            $table->foreign('productions_id')->references('id')->on('productions')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('operators_id')->unsigned();
            $table->foreign('operators_id')->references('id')->on('operators')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('incidences');
    }
}

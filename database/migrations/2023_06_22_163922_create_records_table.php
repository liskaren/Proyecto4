<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->date('Fecha');

            $table->integer('operators_id')->unsigned();
            $table->foreign('operators_id')->references('id')->on('operators')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('productions_id')->unsigned();
            $table->foreign('productions_id')->references('id')->on('productions')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('incidences_id')->unsigned();
            $table->foreign('incidences_id')->references('id')->on('incidences')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('records');
    }
}

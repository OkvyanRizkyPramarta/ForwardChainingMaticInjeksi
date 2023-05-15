<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->integer('km');
            $table->unsignedBigInteger('rule_id');
            $table->unsignedBigInteger('motorcycle_id');
            $table->timestamps();

            $table->foreign('rule_id')->references('id')->on('rules');
            $table->foreign('motorcycle_id')->references('id')->on('motorcycles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnoses');
    }
}

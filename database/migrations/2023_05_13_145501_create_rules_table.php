<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('damage_id');
            $table->tinyInteger('G001');
            $table->tinyInteger('G002');
            $table->tinyInteger('G003');
            $table->tinyInteger('G004');
            $table->tinyInteger('G005');
            $table->tinyInteger('G006');
            $table->tinyInteger('G007');
            $table->tinyInteger('G008');
            $table->tinyInteger('G009');
            $table->tinyInteger('G010');
            $table->tinyInteger('G011');
            $table->tinyInteger('G012');
            $table->tinyInteger('G013');
            $table->tinyInteger('G014');
            $table->tinyInteger('G015');
            $table->tinyInteger('G016');
            $table->tinyInteger('G017');
            $table->tinyInteger('G018');
            $table->tinyInteger('G019');
            $table->tinyInteger('G020');
            $table->timestamps();

            //$table->foreign('damage_id')->references('id')->on('damages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}

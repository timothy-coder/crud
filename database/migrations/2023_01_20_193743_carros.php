<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('carros', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('modelo');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('lugar_id')->unsigned();
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete("cascade");
            $table->foreign('lugar_id')->references('id')->on('lugar')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

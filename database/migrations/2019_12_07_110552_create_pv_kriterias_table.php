<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_kriterias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_kriteria')->unsigned();
            $table->float('nilai');
            $table->timestamps();

            $table->foreign('id_kriteria')->references('id')->on('kriterias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_kriterias');
    }
}

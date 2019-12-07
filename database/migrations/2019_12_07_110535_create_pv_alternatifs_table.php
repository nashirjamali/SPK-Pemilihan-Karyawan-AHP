<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvAlternatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_alternatifs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_alternatif')->unsigned();
            $table->bigInteger('id_kriteria')->unsigned();
            $table->timestamps();

            $table->foreign('id_alternatif')->references('id')->on('alternatifs');
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
        Schema::dropIfExists('pv_alternatifs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pkl_id');
            $table->string('absensi');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('absensis', function (Blueprint  $table) {
            $table->foreign('pkl_id')->references('id')->on('pkls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('absensis');
    }
}

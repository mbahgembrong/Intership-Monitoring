<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pkl_id');
            $table->text('laporan');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('laporans', function (Blueprint  $table) {
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
        Schema::drop('laporans');
    }
}

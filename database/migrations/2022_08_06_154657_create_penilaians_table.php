<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pkl_id');
            $table->integer('kerajinan');
            $table->integer('kejujuran');
            $table->integer('kedisiplinan');
            $table->integer('kerjasama');
            $table->integer('inisiatif');
            $table->integer('tanggung_jawab');
            $table->integer('etika');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('penilaians', function (Blueprint  $table) {
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
        Schema::drop('penilaians');
    }
}

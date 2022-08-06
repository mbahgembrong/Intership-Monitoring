<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePklsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkls', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('siswa_id');
            $table->unsignedInteger('staff_id')->nullable();
            $table->unsignedInteger('bidang_id')->nullable();
            $table->unsignedInteger('pembimbing_id')->nullable();
            $table->unsignedInteger('instansi_id')->nullable();
            $table->string('status');
            $table->date('waktu_mulai');
            $table->date('waktu_selesai');
            $table->string('id_sertifikat')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('no_induk');
            $table->string('semester');
            $table->string('jurusan');
            $table->text('file');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('pkls', function (Blueprint  $table) {
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
            $table->foreign('staff_id')->references('id')->on('stafs')->onDelete('cascade');
            $table->foreign('bidang_id')->references('id')->on('bidangs')->onDelete('cascade');
            $table->foreign('pembimbing_id')->references('id')->on('pembimbings')->onDelete('cascade');
            $table->foreign('instansi_id')->references('id')->on('instansis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pkls');
    }
}

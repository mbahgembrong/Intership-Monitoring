<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembimbingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembimbings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('instansi_id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('pembimbings', function (Blueprint  $table) {
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
        Schema::drop('pembimbings');
    }
}

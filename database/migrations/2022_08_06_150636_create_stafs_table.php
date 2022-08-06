<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stafs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('bidang_id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('phone', 15)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('stafs', function (Blueprint  $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('bidang_id')->references('id')->on('bidangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stafs');
    }
}

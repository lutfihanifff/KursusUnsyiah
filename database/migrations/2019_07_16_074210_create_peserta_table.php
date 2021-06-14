<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->unsignedInteger('user_id')->unique();
            $table->string('nama', 45);
            $table->string('tempat_lahir', 20)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('gender', ['L', 'P']);
            $table->string('nohp', 15)->nullable();
            $table->string('alamat')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKursusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('instruktur_id');
            $table->unsignedInteger('peserta_id');
            $table->unsignedInteger('program_id');
            $table->integer('nilai_teori')->length(3);
            $table->enum('status', ['mulai', 'selesai']);
            $table->timestamps();

            $table->foreign('peserta_id')->references('id')->on('peserta')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('program_id')->references('id')->on('program')->onUpdate('cascade');
            $table->foreign('instruktur_id')->references('id')->on('instruktur')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kursus');
    }
}

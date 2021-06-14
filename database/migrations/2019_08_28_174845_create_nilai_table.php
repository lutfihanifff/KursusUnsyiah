<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kursus_id');
            $table->unsignedInteger('materi_id');
            $table->integer('nilai')->length(3);

            $table->foreign('kursus_id')->references('id')->on('kursus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('materi_id')->references('id')->on('materi')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai');
    }
}

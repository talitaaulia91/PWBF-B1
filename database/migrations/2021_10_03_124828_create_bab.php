<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bab', function (Blueprint $table) {
            $table->char('id_bab',3);
            $table->char('id_buku',5);
            $table->string('bab',50);
            $table->string('judul',100);
            $table->text('keterangan');
            $table->foreign('id_buku')->references('id_buku')->on('buku');
            $table->primary('id_bab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bab');
    }
}

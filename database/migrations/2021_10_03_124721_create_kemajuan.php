<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemajuan', function (Blueprint $table) {       
            $table->char('id_kemajuan',5);
            $table->char('id_santri',10);
            $table->char('id_pengurus',10);
            $table->date('tanggal');
            $table->char('status',1);
            $table->foreign('id_santri')->references('id_santri')->on('santri');
            $table->foreign('id_pengurus')->references('id_pengurus')->on('pengurus');
            $table->primary('id_kemajuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kemajuan');
    }
}

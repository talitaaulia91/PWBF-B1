<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKemajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kemajuan', function (Blueprint $table) {
            $table->char('id_dk',5);
            $table->char('id_kemajuan',5);
            $table->char('id_bab',3);
            $table->text('keterangan');
            $table->foreign('id_kemajuan')->references('id_kemajuan')->on('kemajuan');
            $table->foreign('id_bab')->references('id_bab')->on('bab');
            $table->primary('id_dk');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_kemajuan');
    }
}

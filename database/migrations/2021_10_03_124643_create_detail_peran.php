<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPeran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_peran', function (Blueprint $table) {
            
            $table->char('id_dp',5);
            $table->char('id_peran',5);
            $table->char('id_pengurus',10);
            $table->foreign('id_peran')->references('id_peran')->on('peran');
            $table->foreign('id_pengurus')->references('id_pengurus')->on('pengurus');
            $table->primary('id_dp');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_peran');
    }
}

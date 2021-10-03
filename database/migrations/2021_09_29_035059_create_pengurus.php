<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
           
            $table->char('id_pengurus',10);
            $table->string('nama', 30);
            $table->string('email', 30);
            $table->char('gender',1);
            $table->string('password',15);
            $table->char('aktif',1);
            $table->primary('id_pengurus');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengurus');
    }
}

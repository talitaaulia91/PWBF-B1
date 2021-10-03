<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
           
            $table->char('id_santri',10);
            $table->string('nama', 30);
            $table->char('gender',1);
            $table->date('tgl_Lahir');
            $table->string('kota_Lahir',20);
            $table->string('nama_Ortu',30);
            $table->string('alamat_Ortu',100);
            $table->string('no_hp',13);
            $table->string('email',30);
            $table->string('password',15);
            $table->date('tgl_Masuk');
            $table->char('aktif', 1);
            $table->primary('id_santri');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('santri');
    }
}

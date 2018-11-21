<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelPemesanans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('pesans', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('nim')->unique();
                $table->string('no_telp');
                $table->string('prodi');
                $table->date('tgl_pinjam');
                $table->tinyint('stage')->default('0');
                $table->timestamps();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesans');
    }
}

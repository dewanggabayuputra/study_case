<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Klaim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klaim', function (Blueprint $table) {
            $table->id();
            $table->string('lob');
            $table->string('penyebab_klaim');
            $table->integer('jumlah_nasabah');
            $table->integer('beban_klaim');
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
        //
    }
}

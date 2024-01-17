<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('meja');
            $table->integer('menu');
            $table->integer('jumlah_orang');
            $table->integer('total_harga');
            $table->integer('lama_penyediaan');
            $table->integer('status');
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
        Schema::drop('pesanan');
    }
}

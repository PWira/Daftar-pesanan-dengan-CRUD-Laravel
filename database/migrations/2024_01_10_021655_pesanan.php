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
            $table->integer('meja');
            $table->string('menu');
            $table->integer('orang');
            $table->integer('total_harga');
            $table->integer('penyediaan');
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

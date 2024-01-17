<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Riwayat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pid')->constrained('pesanan');
            $table->integer('total_harga');
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
        Schema::drop('riwayat');
    }
}

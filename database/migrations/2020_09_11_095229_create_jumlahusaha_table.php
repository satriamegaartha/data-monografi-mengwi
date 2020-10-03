<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJumlahusahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumlahusaha', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('industri_besar', 20)->nullable();
            $table->string('industri_besar_tk', 20)->nullable();
            $table->string('industri_kecil', 20)->nullable();
            $table->string('industri_kecil_tk', 20)->nullable();
            $table->string('industri_rtangga', 20)->nullable();
            $table->string('industri_rtangga_tk', 20)->nullable();

            $table->string('hotel', 20)->nullable();
            $table->string('hotel_tk', 20)->nullable();
            $table->string('rm_makan', 20)->nullable();
            $table->string('rm_makan_tk', 20)->nullable();
            $table->string('perdagangan', 20)->nullable();
            $table->string('perdagangan_tk', 20)->nullable();
            $table->string('angkutan', 20)->nullable();
            $table->string('angkutan_tk', 20)->nullable();
            $table->string('lain', 20)->nullable();
            $table->string('lain_tk', 20)->nullable();

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
        Schema::dropIfExists('jumlahusaha');
    }
}

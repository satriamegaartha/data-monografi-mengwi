<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemdesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemdesa', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('desa', 20)->nullable();
            $table->string('kelurahan', 20)->nullable();
            $table->string('dusun', 20)->nullable();
            $table->string('rw', 20)->nullable();
            $table->string('rt', 20)->nullable();
            $table->string('desa_swadaya', 20)->nullable();
            $table->string('desa_swakarya', 20)->nullable();
            $table->string('desa_swasembada', 20)->nullable();
            $table->string('juara_lomba_kec_1', 20)->nullable();
            $table->string('juara_lomba_kec_2', 20)->nullable();
            $table->string('juara_lomba_kec_3', 20)->nullable();
            $table->string('juara_lomba_kab_1', 20)->nullable();
            $table->string('juara_lomba_kab_2', 20)->nullable();
            $table->string('juara_lomba_kab_3', 20)->nullable();
            $table->string('lkmd_1', 20)->nullable();
            $table->string('lkmd_2', 20)->nullable();
            $table->string('lkmd_3', 20)->nullable();
            $table->string('jumlah_kpd', 20)->nullable();
            $table->string('kpd_aktif', 20)->nullable();
            $table->string('kpd_taktif', 20)->nullable();
            $table->string('pembina_kpd_kec', 20)->nullable();
            $table->string('pembina_kpd_otonom', 20)->nullable();
            $table->string('pembina_kpd_vertikal', 20)->nullable();

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
        Schema::dropIfExists('pemdesa');
    }
}

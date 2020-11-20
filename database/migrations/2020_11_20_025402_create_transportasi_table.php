<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportasi', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('periode_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('sepeda', 20)->nullable();
            $table->string('dokar', 20)->nullable();
            $table->string('gerobak', 20)->nullable();
            $table->string('becak', 20)->nullable();
            $table->string('roda3', 20)->nullable();
            $table->string('motor', 20)->nullable();
            $table->string('oplet', 20)->nullable();
            $table->string('taksi', 20)->nullable();
            $table->string('mobil_dinas', 20)->nullable();
            $table->string('mobil_pribadi', 20)->nullable();
            $table->string('truck', 20)->nullable();
            $table->string('bus_umum', 20)->nullable();
            $table->string('bus_kota', 20)->nullable();
            $table->string('perahu_dayung', 20)->nullable();
            $table->string('perahu_motor', 20)->nullable();
            $table->string('perahu_layar', 20)->nullable();
            $table->string('lainnya', 20)->nullable();

            $table->string('tv_umum', 20)->nullable();
            $table->string('telp_umum', 20)->nullable();
            $table->string('kantor_pos', 20)->nullable();
            $table->string('orari', 20)->nullable();
            $table->string('pemancar_radio', 20)->nullable();
            $table->string('listrik_pln', 20)->nullable();
            $table->string('listrik_non_pln', 20)->nullable();
            $table->string('pdm', 20)->nullable();
            $table->string('badan_pengelola_air', 20)->nullable();
            $table->string('pompa', 20)->nullable();
            $table->string('sumur', 20)->nullable();

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
        Schema::dropIfExists('transportasi');
    }
}

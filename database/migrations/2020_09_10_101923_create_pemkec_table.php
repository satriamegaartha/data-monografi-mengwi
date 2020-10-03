<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemkecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemkec', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('kp_status', 20)->nullable();
            $table->string('kp_tanah', 20)->nullable();
            $table->string('kp_bangunan', 20)->nullable();
            $table->string('kp_tahun', 20)->nullable();
            $table->string('kp_sdana', 20)->nullable();
            $table->string('kp_apbn', 20)->nullable();
            $table->string('kp_inpres', 20)->nullable();
            $table->string('kp_apbd1', 20)->nullable();
            $table->string('kp_apbd2', 20)->nullable();
            $table->string('kp_lain', 20)->nullable();
            $table->string('kp_jumlah', 20)->nullable();
            $table->string('kp_tingkat', 20)->nullable();
            $table->string('rc_status', 20)->nullable();
            $table->string('rc_luas', 20)->nullable();
            $table->string('rc_tahun', 20)->nullable();
            $table->string('rc_sdana', 20)->nullable();
            $table->string('rc_apbn', 20)->nullable();
            $table->string('rc_apbd1', 20)->nullable();
            $table->string('rc_apbd2', 20)->nullable();
            $table->string('rc_swadaya', 20)->nullable();
            $table->string('rc_jumlah', 20)->nullable();
            $table->string('rc_kondisi', 20)->nullable();
            $table->string('ins_vertikal', 20)->nullable();
            $table->string('ins_otonom', 20)->nullable();
            $table->string('ins_bumn', 20)->nullable();
            $table->string('ins_jumlah', 20)->nullable();
            $table->string('pegawai_dpk1', 20)->nullable();
            $table->string('pegawai_dpk2', 20)->nullable();
            $table->string('pegawai_daerah', 20)->nullable();
            $table->string('eselon3a', 20)->nullable();
            $table->string('eselon3b', 20)->nullable();
            $table->string('eselon4', 20)->nullable();
            $table->string('eselon5', 20)->nullable();
            $table->string('tipe_kec', 20)->nullable();
            $table->string('lomba_kec', 20)->nullable();
            $table->string('lomba_kec_juara1', 20)->nullable();
            $table->string('lomba_kec_juara2', 20)->nullable();
            $table->string('lomba_kec_juara3', 20)->nullable();

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
        Schema::dropIfExists('pemkec');
    }
}

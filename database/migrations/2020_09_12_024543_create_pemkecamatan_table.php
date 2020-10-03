<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemkecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemkecamatan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('jml_pegawai_ktr', 20)->nullable();
            $table->string('jml_pegawai_ktr_gol4', 20)->nullable();
            $table->string('jml_pegawai_ktr_gol3', 20)->nullable();
            $table->string('jml_pegawai_ktr_gol2', 20)->nullable();
            $table->string('jml_pegawai_ktr_gol1', 20)->nullable();

            $table->string('jml_non_pegawai_ktr', 20)->nullable();
            $table->string('jml_non_pegawai_ktr_gol4', 20)->nullable();
            $table->string('jml_non_pegawai_ktr_gol3', 20)->nullable();
            $table->string('jml_non_pegawai_ktr_gol2', 20)->nullable();
            $table->string('jml_non_pegawai_ktr_gol1', 20)->nullable();

            $table->string('telepon', 20)->nullable();
            $table->string('radio', 20)->nullable();
            $table->string('mesin_tik', 20)->nullable();
            $table->string('meja_kerja', 20)->nullable();
            $table->string('kursi_kerja', 20)->nullable();
            $table->string('meja_kursi_tamu', 20)->nullable();
            $table->string('lemari', 20)->nullable();
            $table->string('r_rapat', 20)->nullable();
            $table->string('r_data', 20)->nullable();
            $table->string('serba_guna', 20)->nullable();
            $table->string('balai_pertemuan', 20)->nullable();
            $table->string('kendaraan_roda2', 20)->nullable();
            $table->string('kendaraan_roda4', 20)->nullable();
            $table->string('mesin_hitung', 20)->nullable();
            $table->string('lain', 20)->nullable();

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
        Schema::dropIfExists('pemkecamatan');
    }
}

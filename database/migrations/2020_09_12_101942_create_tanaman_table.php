<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanaman', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->integer('padi_luas_tanaman')->nullable();
            $table->integer('padi_luas_panen')->nullable();
            $table->integer('padi_rata2_produksi')->nullable();
            $table->integer('padi_jumlah')->nullable();

            $table->integer('jagung_luas_tanaman')->nullable();
            $table->integer('jagung_luas_panen')->nullable();
            $table->integer('jagung_rata2_produksi')->nullable();
            $table->integer('jagung_jumlah')->nullable();

            $table->integer('ketela_pohon_luas_tanaman')->nullable();
            $table->integer('ketela_pohon_luas_panen')->nullable();
            $table->integer('ketela_pohon_rata2_produksi')->nullable();
            $table->integer('ketela_pohon_jumlah')->nullable();

            $table->integer('ketela_rambat_luas_tanaman')->nullable();
            $table->integer('ketela_rambat_luas_panen')->nullable();
            $table->integer('ketela_rambat_rata2_produksi')->nullable();
            $table->integer('ketela_rambat_jumlah')->nullable();

            $table->integer('kacang_tanah_luas_tanaman')->nullable();
            $table->integer('kacang_tanah_luas_panen')->nullable();
            $table->integer('kacang_tanah_rata2_produksi')->nullable();
            $table->integer('kacang_tanah_jumlah')->nullable();

            $table->integer('kedelai_luas_tanaman')->nullable();
            $table->integer('kedelai_luas_panen')->nullable();
            $table->integer('kedelai_rata2_produksi')->nullable();
            $table->integer('kedelai_jumlah')->nullable();

            $table->integer('sayur_luas_tanaman')->nullable();
            $table->integer('sayur_luas_panen')->nullable();
            $table->integer('sayur_rata2_produksi')->nullable();
            $table->integer('sayur_jumlah')->nullable();

            $table->integer('buah_luas_tanaman')->nullable();
            $table->integer('buah_luas_panen')->nullable();
            $table->integer('buah_rata2_produksi')->nullable();
            $table->integer('buah_jumlah')->nullable();

            $table->integer('lain_luas_tanaman')->nullable();
            $table->integer('lain_luas_panen')->nullable();
            $table->integer('lain_rata2_produksi')->nullable();
            $table->integer('lain_jumlah')->nullable();

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
        Schema::dropIfExists('tanaman');
    }
}

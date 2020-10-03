<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerekonomianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perekonomian', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('ksp', 20)->nullable();
            $table->string('kud', 20)->nullable();
            $table->string('bkk', 20)->nullable();
            $table->string('bpkd', 20)->nullable();
            $table->string('badan_kredit', 20)->nullable();
            $table->string('kop_produksi', 20)->nullable();
            $table->string('kop_konsumsi', 20)->nullable();
            $table->string('kop_lain', 20)->nullable();

            $table->string('pasar_umum', 20)->nullable();
            $table->string('pasar_ikan', 20)->nullable();
            $table->string('pasar_hewan', 20)->nullable();

            $table->string('pasar_bangunan_permanen', 20)->nullable();
            $table->string('pasar_tanpa_bangunan_permanen', 20)->nullable();
            $table->string('jumlah_toko', 20)->nullable();
            $table->string('bank', 20)->nullable();
            $table->string('jumlah_lumbung_desa', 20)->nullable();
            $table->string('stasiun_udara', 20)->nullable();
            $table->string('stasiun_laut', 20)->nullable();
            $table->string('stasiun_kereta', 20)->nullable();
            $table->string('stasiun_bis', 20)->nullable();
            $table->string('stasiun_oplet', 20)->nullable();
            $table->string('jumlah_telp_umum', 20)->nullable();

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
        Schema::dropIfExists('perekonomian');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembangunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembangunan', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('periode_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('skt_pertanian', 20)->nullable();
            $table->string('skt_industri', 20)->nullable();
            $table->string('skt_pertambangan', 20)->nullable();
            $table->string('skt_perhubungan', 20)->nullable();
            $table->string('skt_perdagangan', 20)->nullable();
            $table->string('skt_tenaga_kerja', 20)->nullable();
            $table->string('skt_pembangunan_daerah', 20)->nullable();
            $table->string('skt_agama', 20)->nullable();
            $table->string('skt_pendidikan', 20)->nullable();
            $table->string('skt_kesehatan', 20)->nullable();
            $table->string('skt_perumahan', 20)->nullable();
            $table->string('skt_hukum', 20)->nullable();
            $table->string('skt_pertahanan', 20)->nullable();
            $table->string('skt_pers', 20)->nullable();
            $table->string('skt_teknologi', 20)->nullable();
            $table->string('skt_aparatur', 20)->nullable();
            $table->string('skt_usaha', 20)->nullable();
            $table->string('skt_alam', 20)->nullable();

            $table->string('biaya_pusat', 20)->nullable();
            $table->string('biaya_propinsi', 20)->nullable();
            $table->string('biaya_kota', 20)->nullable();
            $table->string('swadaya', 20)->nullable();
            $table->string('biaya_luar_negeri', 20)->nullable();
            $table->string('biaya_lain', 20)->nullable();
            $table->string('biaya_jumlah', 20)->nullable();

            $table->string('wajib_pbb', 20)->nullable();
            $table->string('target_pbb', 20)->nullable();
            $table->string('pokok_pbb', 20)->nullable();
            $table->string('tunggakan_pbb', 20)->nullable();
            $table->string('realisasi_pbb', 20)->nullable();

            $table->string('inv_bdg_energi', 20)->nullable();
            $table->string('inv_bdg_pangan', 20)->nullable();
            $table->string('inv_bdg_pertanian', 20)->nullable();
            $table->string('inv_bdg_konstruksi', 20)->nullable();
            $table->string('inv_bdg_material', 20)->nullable();
            $table->string('inv_bdg_kerajinan', 20)->nullable();


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
        Schema::dropIfExists('pembangunan');
    }
}

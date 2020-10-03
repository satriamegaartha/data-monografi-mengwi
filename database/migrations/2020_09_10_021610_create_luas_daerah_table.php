<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuasDaerahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luas_daerah', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);
            $table->string('tanah_sawah', 20)->nullable();
            $table->string('ts_iteknis', 20)->nullable();
            $table->string('ts_isteknis', 20)->nullable();
            $table->string('ts_isederhana', 20)->nullable();
            $table->string('ts_tadah_hujan', 20)->nullable();
            $table->string('ts_sawah', 20)->nullable();

            $table->string('tanah_kering', 20)->nullable();
            $table->string('tk_pekarangan', 20)->nullable();
            $table->string('tk_tegal', 20)->nullable();
            $table->string('tk_ladang', 20)->nullable();
            $table->string('tk_penggembalaan', 20)->nullable();

            $table->string('tanah_basah', 20)->nullable();
            $table->string('tb_tambak', 20)->nullable();
            $table->string('tb_rawa', 20)->nullable();
            $table->string('tb_balong', 20)->nullable();
            $table->string('tb_gambut', 20)->nullable();

            $table->string('tanah_hutan', 20)->nullable();
            $table->string('th_lebat', 20)->nullable();
            $table->string('th_belukar', 20)->nullable();
            $table->string('th_sejenis1', 20)->nullable();
            $table->string('th_sejenis2', 20)->nullable();
            $table->string('th_rawa', 20)->nullable();

            $table->string('tanah_perkebunan', 20)->nullable();
            $table->string('tp_negara', 20)->nullable();
            $table->string('tp_swasta', 20)->nullable();

            $table->string('tanah_umum', 20)->nullable();
            $table->string('tu_lapangan', 20)->nullable();
            $table->string('tu_rekreasi', 20)->nullable();
            $table->string('tu_jalur_hijau', 20)->nullable();
            $table->string('tu_kuburan', 20)->nullable();

            $table->string('tanah_lain_lain', 20)->nullable();
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
        Schema::dropIfExists('luas_daerah');
    }
}

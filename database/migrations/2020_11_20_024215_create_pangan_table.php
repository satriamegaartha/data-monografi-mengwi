<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pangan', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('periode_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('luas_bimas_padi_insus', 20)->nullable();
            $table->string('luas_bimas_padi_inmum', 20)->nullable();
            $table->string('luas_inmas_padi_insus', 20)->nullable();
            $table->string('luas_inmas_padi_inmum', 20)->nullable();
            $table->string('luas_padi_intensifikasi', 20)->nullable();
            $table->string('luas_hama_wereng', 20)->nullable();
            $table->string('luas_hama_tikus', 20)->nullable();
            $table->string('luas_hama_lainnya', 20)->nullable();
            $table->string('luas_puso_wereng', 20)->nullable();
            $table->string('luas_puso_tikus', 20)->nullable();
            $table->string('luas_puso_banjir', 20)->nullable();
            $table->string('luas_puso_kekeringan', 20)->nullable();

            $table->string('penyalur_urea', 20)->nullable();
            $table->string('penyalur_tps', 20)->nullable();
            $table->string('penyalur_insektisida', 20)->nullable();
            $table->string('penyalur_rodentisida', 20)->nullable();

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
        Schema::dropIfExists('pangan');
    }
}

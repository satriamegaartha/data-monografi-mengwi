<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKependudukanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kependudukan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->integer('jml_kepala_keluarga')->nullable();
            $table->integer('jml_laki')->nullable();
            $table->integer('jml_perempuan')->nullable();
            $table->integer('jml_wni_laki')->nullable();
            $table->integer('jml_wni_perempuan')->nullable();
            $table->integer('jml_wna_laki')->nullable();
            $table->integer('jml_wna_perempuan')->nullable();
            $table->integer('jml_islam')->nullable();
            $table->integer('jml_katholik')->nullable();
            $table->integer('jml_protestan')->nullable();
            $table->integer('jml_hindu')->nullable();
            $table->integer('jml_budha')->nullable();
            $table->integer('jml_penganut_aliran')->nullable();

            $table->integer('jml_b_0_4')->nullable();
            $table->integer('jml_b_5_9')->nullable();
            $table->integer('jml_b_10_14')->nullable();
            $table->integer('jml_b_15_19')->nullable();
            $table->integer('jml_b_20_24')->nullable();
            $table->integer('jml_b_25_29')->nullable();
            $table->integer('jml_b_30_34')->nullable();
            $table->integer('jml_b_35_39')->nullable();
            $table->integer('jml_b_40_up')->nullable();

            $table->string('kepadatan', 20)->nullable();

            $table->integer('petani_pemilik')->nullable();
            $table->integer('petani_penggarap')->nullable();
            $table->integer('petani_penyekap')->nullable();
            $table->integer('petani_buruh')->nullable();
            $table->integer('nelayan')->nullable();
            $table->integer('pengusaha_sedang')->nullable();
            $table->integer('pengrajin')->nullable();
            $table->integer('buruh_industri')->nullable();
            $table->integer('buruh_bangunan')->nullable();
            $table->integer('buruh_pertambangan')->nullable();
            $table->integer('buruh_perkebunan')->nullable();
            $table->integer('pedagang')->nullable();
            $table->integer('pengangkutan')->nullable();
            $table->integer('pns')->nullable();
            $table->integer('abri')->nullable();
            $table->integer('pensiun')->nullable();
            $table->integer('peternak_sapi_perah')->nullable();
            $table->integer('peternak_sapi_biasa')->nullable();
            $table->integer('peternak_kerbau')->nullable();
            $table->integer('peternak_kambing')->nullable();
            $table->integer('peternak_domba')->nullable();
            $table->integer('peternak_kuda')->nullable();
            $table->integer('lain')->nullable();









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
        Schema::dropIfExists('kependudukan');
    }
}

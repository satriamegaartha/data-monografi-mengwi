<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolkamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polkam', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('periode_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('pencurian_banyak', 20)->nullable();
            $table->string('pencurian_kerugian', 20)->nullable();
            $table->string('perampokan_banyak', 20)->nullable();
            $table->string('perampokan_kerugian', 20)->nullable();
            $table->string('pembunuhan_banyak', 20)->nullable();
            $table->string('pembunuhan_kerugian', 20)->nullable();
            $table->string('pemerkosaan_banyak', 20)->nullable();
            $table->string('pemerkosaan_kerugian', 20)->nullable();
            $table->string('narkoba_banyak', 20)->nullable();
            $table->string('narkoba_kerugian', 20)->nullable();
            $table->string('lainnya_banyak', 20)->nullable();
            $table->string('lainnya_kerugian', 20)->nullable();

            $table->string('jumlah_hansip', 20)->nullable();
            $table->string('jumlah_menwa', 20)->nullable();
            $table->string('jumlah_kemra', 20)->nullable();
            $table->string('jumlah_pos_kamling', 20)->nullable();

            $table->string('jumlah_wni', 20)->nullable();
            $table->string('jumlah_wni_statar', 20)->nullable();
            $table->string('jumlah_wni_btatar', 20)->nullable();

            $table->string('jumlah_pns', 20)->nullable();
            $table->string('jumlah_pns_statar', 20)->nullable();
            $table->string('jumlah_pns_btatar', 20)->nullable();

            $table->string('jumlah_pegawai_daerah', 20)->nullable();
            $table->string('jumlah_pegawai_daerah_statar', 20)->nullable();
            $table->string('jumlah_pegawai_daerah_btatar', 20)->nullable();

            $table->string('ppp_kecamatan', 20)->nullable();
            $table->string('ppp_desa', 20)->nullable();
            $table->string('ppp_kelurahan', 20)->nullable();

            $table->string('golkar_kecamatan', 20)->nullable();
            $table->string('golkar_desa', 20)->nullable();
            $table->string('golkar_kelurahan', 20)->nullable();

            $table->string('pdi_kecamatan', 20)->nullable();
            $table->string('pdi_desa', 20)->nullable();
            $table->string('pdi_kelurahan', 20)->nullable();

            $table->string('org_kegiatan', 20)->nullable();
            $table->string('org_profesi', 20)->nullable();
            $table->string('org_fungsi', 20)->nullable();
            $table->string('org_agama_islam', 20)->nullable();
            $table->string('org_agama_kristenp', 20)->nullable();
            $table->string('org_agama_kristenk', 20)->nullable();
            $table->string('org_agama_hindu', 20)->nullable();
            $table->string('org_agama_budha', 20)->nullable();
            $table->string('org_kepercayaan', 20)->nullable();

            $table->string('media_massa', 20)->nullable();
            $table->string('kmd', 20)->nullable();

            $table->string('jumlah_bekas_g30spki', 20)->nullable();

            $table->string('wnri_pelintas', 20)->nullable();
            $table->string('wna_pelintas', 20)->nullable();
            $table->string('desa_pelintas', 20)->nullable();

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
        Schema::dropIfExists('polkam');
    }
}

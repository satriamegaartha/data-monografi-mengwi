<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaranasosbudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saranasosbud', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('tk_sekolah', 10)->nullable();
            $table->string('tk_murid', 10)->nullable();
            $table->string('tk_guru', 10)->nullable();
            $table->string('tk_prasarana', 10)->nullable();
            $table->string('tk_perpustakaan', 10)->nullable();

            $table->string('sdn_sekolah', 10)->nullable();
            $table->string('sdn_murid', 10)->nullable();
            $table->string('sdn_guru', 10)->nullable();
            $table->string('sdn_prasarana', 10)->nullable();
            $table->string('sdn_perpustakaan', 10)->nullable();

            $table->string('smtpn_sekolah', 10)->nullable();
            $table->string('smtpn_murid', 10)->nullable();
            $table->string('smtpn_guru', 10)->nullable();
            $table->string('smtpn_prasarana', 10)->nullable();
            $table->string('smtpn_perpustakaan', 10)->nullable();

            $table->string('smtpsu_sekolah', 10)->nullable();
            $table->string('smtpsu_murid', 10)->nullable();
            $table->string('smtpsu_guru', 10)->nullable();
            $table->string('smtpsu_prasarana', 10)->nullable();
            $table->string('smtpsu_perpustakaan', 10)->nullable();

            $table->string('smtan_sekolah', 10)->nullable();
            $table->string('smtan_murid', 10)->nullable();
            $table->string('smtan_guru', 10)->nullable();
            $table->string('smtan_prasarana', 10)->nullable();
            $table->string('smtan_lab', 10)->nullable();
            $table->string('smtan_perpustakaan', 10)->nullable();

            $table->string('smtasu_sekolah', 10)->nullable();
            $table->string('smtasu_murid', 10)->nullable();
            $table->string('smtasu_guru', 10)->nullable();
            $table->string('smtasu_prasarana', 10)->nullable();
            $table->string('smtasu_lab', 10)->nullable();
            $table->string('smtasu_perpustakaan', 10)->nullable();

            $table->string('masjid', 10)->nullable();
            $table->string('surau', 10)->nullable();
            $table->string('gereja', 10)->nullable();
            $table->string('kuil', 10)->nullable();

            $table->string('taman', 10)->nullable();
            $table->string('pantai', 10)->nullable();
            $table->string('permandian', 10)->nullable();
            $table->string('hutan_lindung', 10)->nullable();
            $table->string('tradisional', 10)->nullable();
            $table->string('rekreasi_lain', 10)->nullable();
            $table->string('cinderamata', 10)->nullable();

            $table->string('jml_sanggar', 10)->nullable();
            $table->string('jml_budayawan', 10)->nullable();
            $table->string('jml_seniman', 10)->nullable();

            $table->string('bioskop', 10)->nullable();
            $table->string('penginapan', 10)->nullable();
            $table->string('restoran', 10)->nullable();

            $table->string('rsu_pem', 10)->nullable();
            $table->string('rsu_pem_pengunjung1', 10)->nullable();
            $table->string('rsu_pem_pengunjung2', 10)->nullable();

            $table->string('rsu_sw', 10)->nullable();
            $table->string('rsu_sw_pengunjung1', 10)->nullable();
            $table->string('rsu_sw_pengunjung2', 10)->nullable();

            $table->string('rskp_pem', 10)->nullable();
            $table->string('rskp_pem_pengunjung1', 10)->nullable();
            $table->string('rskp_pem_pengunjung2', 10)->nullable();

            $table->string('rskp_sw', 10)->nullable();
            $table->string('rskp_sw_pengunjung1', 10)->nullable();
            $table->string('rskp_sw_pengunjung2', 10)->nullable();

            $table->string('bersalin', 10)->nullable();
            $table->string('bersalin_pem', 10)->nullable();
            $table->string('bersalin_pem_pengunjung1', 10)->nullable();
            $table->string('bersalin_pem_pengunjung2', 10)->nullable();

            $table->string('bersalin_poli', 10)->nullable();
            $table->string('bersalin_poli_pengunjung1', 10)->nullable();
            $table->string('bersalin_poli_pengunjung2', 10)->nullable();

            $table->string('puskesmas', 10)->nullable();
            $table->string('puskesmas_pengunjung1', 10)->nullable();
            $table->string('puskesmas_pengunjung2', 10)->nullable();
            $table->string('puskesmas_pengunjung_dokter', 10)->nullable();
            $table->string('puskesmas_pengunjung_perawat', 10)->nullable();
            $table->string('puskesmas_pengunjung_bidan', 10)->nullable();
            $table->string('puskesmas_pembantu', 10)->nullable();
            $table->string('puskesmas_pembantu_dokter', 10)->nullable();
            $table->string('puskesmas_pembantu_perawat', 10)->nullable();
            $table->string('puskesmas_pembantu_bidan', 10)->nullable();

            $table->string('dokter_umum', 10)->nullable();
            $table->string('dokter_anak', 10)->nullable();
            $table->string('dokter_kandungan', 10)->nullable();
            $table->string('dokter_kulit', 10)->nullable();
            $table->string('dokter_lain', 10)->nullable();
            $table->string('dukun_khitan', 10)->nullable();
            $table->string('dukun_bayi', 10)->nullable();
            $table->string('sanatorium', 10)->nullable();
            $table->string('apotik', 10)->nullable();
            $table->string('panti_pijat', 10)->nullable();

            $table->string('jumlah_pos_kb', 10)->nullable();
            $table->string('jumlah_pus', 10)->nullable();
            $table->string('jumlah_pus_kb', 10)->nullable();
            $table->string('jumlah_posyandu', 10)->nullable();
            $table->string('jumlah_akseptor', 10)->nullable();
            $table->string('jumlah_akseptor_pil', 10)->nullable();
            $table->string('jumlah_akseptor_iud', 10)->nullable();
            $table->string('jumlah_akseptor_kondom', 10)->nullable();
            $table->string('jumlah_akseptor_suntik', 10)->nullable();
            $table->string('jumlah_akseptor_mop', 10)->nullable();
            $table->string('jumlah_akseptor_mow', 10)->nullable();
            $table->string('jumlah_akseptor_kbmandiri', 10)->nullable();

            $table->string('cacat_fisik', 10)->nullable();
            $table->string('cacat_mental', 10)->nullable();






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
        Schema::dropIfExists('saranasosbud');
    }
}

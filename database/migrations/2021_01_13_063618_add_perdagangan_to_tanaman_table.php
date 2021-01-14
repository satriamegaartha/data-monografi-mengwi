<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPerdaganganToTanamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tanaman', function (Blueprint $table) {
            $table->integer('cengkeh_blm_produksi')->nullable()->after('lain_jumlah');
            $table->integer('cengkeh_produksi')->nullable();
            $table->integer('cengkeh_tak_produksi')->nullable();
            $table->integer('cengkeh_jml_produksi')->nullable();

            $table->integer('pala_blm_produksi')->nullable();
            $table->integer('pala_produksi')->nullable();
            $table->integer('pala_tak_produksi')->nullable();
            $table->integer('pala_jml_produksi')->nullable();

            $table->integer('tembakau_blm_produksi')->nullable();
            $table->integer('tembakau_produksi')->nullable();
            $table->integer('tembakau_tak_produksi')->nullable();
            $table->integer('tembakau_jml_produksi')->nullable();

            $table->integer('kelapa_blm_produksi')->nullable();
            $table->integer('kelapa_produksi')->nullable();
            $table->integer('kelapa_tak_produksi')->nullable();
            $table->integer('kelapa_jml_produksi')->nullable();

            $table->integer('kelapa_sawit_blm_produksi')->nullable();
            $table->integer('kelapa_sawit_produksi')->nullable();
            $table->integer('kelapa_sawit_tak_produksi')->nullable();
            $table->integer('kelapa_sawit_jml_produksi')->nullable();

            $table->integer('kopi_blm_produksi')->nullable();
            $table->integer('kopi_produksi')->nullable();
            $table->integer('kopi_tak_produksi')->nullable();
            $table->integer('kopi_jml_produksi')->nullable();

            $table->integer('coklat_blm_produksi')->nullable();
            $table->integer('coklat_produksi')->nullable();
            $table->integer('coklat_tak_produksi')->nullable();
            $table->integer('coklat_jml_produksi')->nullable();

            $table->integer('panili_blm_produksi')->nullable();
            $table->integer('panili_produksi')->nullable();
            $table->integer('panili_tak_produksi')->nullable();
            $table->integer('panili_jml_produksi')->nullable();

            $table->integer('lain_blm_produksi')->nullable();
            $table->integer('lain_produksi')->nullable();
            $table->integer('lain_tak_produksi')->nullable();
            $table->integer('lain_jml_produksi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tanaman', function (Blueprint $table) {
            //
        });
    }
}

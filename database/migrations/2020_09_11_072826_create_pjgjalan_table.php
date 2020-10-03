<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePjgjalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjgjalan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('j_negara', 20)->nullable();
            $table->string('j_propinsi', 20)->nullable();
            $table->string('j_kota', 20)->nullable();
            $table->string('j_desa', 20)->nullable();
            $table->string('j_jumlah', 20)->nullable();

            $table->string('j_kls1', 20)->nullable();
            $table->string('j_kls1_r', 20)->nullable();
            $table->string('j_kls2', 20)->nullable();
            $table->string('j_kls2_r', 20)->nullable();
            $table->string('j_kls3', 20)->nullable();
            $table->string('j_kls3_r', 20)->nullable();
            $table->string('j_kls3a', 20)->nullable();
            $table->string('j_kls3a_r', 20)->nullable();
            $table->string('j_kls4', 20)->nullable();
            $table->string('j_kls4_r', 20)->nullable();
            $table->string('j_klsdesa', 20)->nullable();
            $table->string('j_klsdesa_r', 20)->nullable();
            $table->string('j_kls_jumlah', 20)->nullable();

            $table->string('jembatan', 20)->nullable();
            $table->string('jem_beton', 20)->nullable();
            $table->string('jem_besi', 20)->nullable();
            $table->string('jem_kayu', 20)->nullable();
            $table->string('jem_lain', 20)->nullable();

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
        Schema::dropIfExists('pjgjalan');
    }
}

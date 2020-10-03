<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKumumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kumum', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);
            $table->string('tinggi_pusat', 20)->nullable();
            $table->string('suhu_max_min', 20)->nullable();
            $table->string('jpp_desa', 20)->nullable();
            $table->string('jpp_kabupaten', 20)->nullable();
            $table->string('jpp_propinsi', 20)->nullable();
            $table->string('ch_jumlah_hari', 20)->nullable();
            $table->string('ch_banyaknya', 20)->nullable();
            $table->string('bw_datar_berombak', 20)->nullable();
            $table->string('bw_berombak_berbukit', 20)->nullable();
            $table->string('bw_berbukit_bergunung', 20)->nullable();
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
        Schema::dropIfExists('kumum');
    }
}

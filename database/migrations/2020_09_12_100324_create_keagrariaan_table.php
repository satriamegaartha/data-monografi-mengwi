<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeagrariaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keagrariaan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('tm_sertifikat', 20)->nullable();
            $table->string('tm_blm_sertifikat', 20)->nullable();
            $table->string('tanah_hak_pengelolaan', 20)->nullable();
            $table->string('tanah_negara', 20)->nullable();
            $table->string('tanah_bebas', 20)->nullable();
            $table->string('tanah_hak_pakai', 20)->nullable();
            $table->string('tanah_hak_guna_bangunan', 20)->nullable();
            $table->string('tanah_hak_guna_usaha', 20)->nullable();
            $table->string('tanah_adat', 20)->nullable();

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
        Schema::dropIfExists('keagrariaan');
    }
}

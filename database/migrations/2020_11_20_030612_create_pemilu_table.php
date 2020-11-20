<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemiluTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilu', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('periode_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('pemilih_pemula', 20)->nullable();
            $table->string('pemilih_non_pemula', 20)->nullable();
            $table->string('pengguna_pemula', 20)->nullable();
            $table->string('pengguna_non_pemula', 20)->nullable();
            $table->string('hasil_pemilu', 20)->nullable();

            $table->string('pemilu_ot_a', 20)->nullable();
            $table->string('pemilu_ot_1_a', 20)->nullable();
            $table->string('pemilu_ot_b', 20)->nullable();
            $table->string('pemilu_ot_1_b', 20)->nullable();
            $table->string('pemilu_ot_c', 20)->nullable();
            $table->string('pemilu_ot_1_c', 20)->nullable();

            $table->string('pemilih_ab', 20)->nullable();

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
        Schema::dropIfExists('pemilu');
    }
}

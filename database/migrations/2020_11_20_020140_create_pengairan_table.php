<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengairanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengairan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('periode_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('waduk_baik', 20)->nullable();
            $table->string('waduk_rusak_dipakai', 20)->nullable();
            $table->string('waduk_rusak', 20)->nullable();
            $table->string('dam', 20)->nullable();
            $table->string('kincir_air', 20)->nullable();
            $table->string('pompa_air', 20)->nullable();
            $table->string('air_terjun', 20)->nullable();
            $table->string('sungai', 20)->nullable();

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
        Schema::dropIfExists('pengairan');
    }
}

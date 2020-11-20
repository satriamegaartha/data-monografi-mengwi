<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkreditanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkreditan', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('periode_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('bimas', 20)->nullable();
            $table->string('bimas_jumlah', 20)->nullable();
            $table->string('kik', 20)->nullable();
            $table->string('kik_jumlah', 20)->nullable();
            $table->string('kmkp', 20)->nullable();
            $table->string('kmkp_jumlah', 20)->nullable();
            $table->string('candak_kulak', 20)->nullable();
            $table->string('candak_kulak_jumlah', 20)->nullable();
            $table->string('jps', 20)->nullable();
            $table->string('jps_jumlah', 20)->nullable();

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
        Schema::dropIfExists('perkreditan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasaranaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('balai_desa', 20)->nullable();
            $table->string('kantor_desa', 20)->nullable();
            $table->string('bengkok_sawah', 20)->nullable();
            $table->string('bengkok_kering', 20)->nullable();
            $table->string('bengkok_tambak', 20)->nullable();
            $table->string('bengkok_lain', 20)->nullable();
            $table->string('kas_sawah', 20)->nullable();
            $table->string('kas_kering', 20)->nullable();
            $table->string('kas_tambak', 20)->nullable();
            $table->string('kas_rawa', 20)->nullable();
            $table->string('kas_lain', 20)->nullable();


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
        Schema::dropIfExists('prasarana');
    }
}

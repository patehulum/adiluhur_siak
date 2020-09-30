<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_kelas', function (Blueprint $table) {
            $table->string('kd_kelas', 10);
            $table->string('nama_kelas', 30);
            $table->string('kd_tingkatan', 5);
            $table->string('kd_jurusan', 5);
            $table->string('nama_tingkatan', 30);
            $table->string('nama_jurusan', 30);
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
        //
    }
}

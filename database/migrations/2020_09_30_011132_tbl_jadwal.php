<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_jadwal', function (Blueprint $table) {
            $table->bigIncrements('id_jadwal');
            $table->integer('id_tahun_akademik');
            $table->string('semester', 10);
            $table->string('kd_jurusan', 5);
            $table->string('kd_tingkatan', 5);
            $table->string('kd_kelas', 10);
            $table->string('kd_mapel', 5);
            $table->integer('id_guru');
            $table->string('jam', 30);
            $table->string('kd_ruangan', 10);
            $table->string('hari', 10);
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

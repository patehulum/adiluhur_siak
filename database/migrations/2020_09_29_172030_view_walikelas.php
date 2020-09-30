<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewWalikelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_walikelas', function (Blueprint $table) {
            $table->string('nama_guru', 40);
            $table->string('nama_kelas', 30);
            $table->integer('id_walikelas')->primary();
            $table->integer('id_tahun_akademik');
            $table->string('nama_jurusan', 30);
            $table->string('nama_tingkatan', 30);
            $table->string('tahun_akademik', 10);
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

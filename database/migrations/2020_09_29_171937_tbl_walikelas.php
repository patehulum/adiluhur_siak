<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblWalikelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_walikelas', function (Blueprint $table) {
            $table->bigIncrements('id_walikelas');
            $table->integer('id_guru');
            $table->integer('id_tahun_akademik');
            $table->string('kd_kelas', 10);
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

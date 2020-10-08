<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_guru', function (Blueprint $table) {
            $table->bigIncrements('id_guru');
            $table->string('nuptk',16);
            $table->string('nama_guru', 40);
            $table->enum('jenis_kelamin', ['P', 'W']);
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir', );
            $table->string('alamat_guru', 100);
            $table->string('status', 20);
            $table->string('pendidikan_terakhir', 20);
            $table->integer('tahun');
            $table->string('no_telp', 15);
            $table->string('foto');
            $table->string('email');
            $table->string('password');
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

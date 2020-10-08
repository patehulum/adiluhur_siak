<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class TblSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_siswa', function (Blueprint $table) {
            $table->bigIncrements('nis');
            $table->string('nama', 40);
            $table->enum('jenis_kelamin',['Laki-laki', 'Perempuan']);
            $table->string('alamat_siswa', 100);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 30);
            $table->string('nama_ayah', 15);
            $table->string('nama_ibu', 15);
            $table->string('alamat_ortu', 100);
            $table->string('no_telp_ortu', 15);
            $table->string('no_telp_siswa', 15);
            $table->string('no_ijazah', 20);
            $table->string('sekolah_asal', 20);
            $table->integer('kd_agama');
            $table->string('foto');
            $table->string('kd_kelas', 10);
            $table->string('status_siswa', 20);
            $table->string('email', 20);
            $table->string('password', 50);
            $table->timestamps();
        });

        DB::statement("ALTER TABLE tbl_siswa AUTO_INCREMENT = 24521;");
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

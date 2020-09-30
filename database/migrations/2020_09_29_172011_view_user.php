<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViewUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_user', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('nama_lengkap', 40);
            $table->string('username', 30);
            $table->string('password', 40);
            $table->integer('id_level_user');
            $table->string('foto');
            $table->string('nama_level', 30);
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

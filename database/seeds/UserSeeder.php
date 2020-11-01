<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'nama_lengkap' => 'Admin',
        //     'email' => 'admin1@gmail.com',
        //     'password' => Crypt::encryptString('123123'),
        //     'id_level_user' => 1,
        // ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Siswa',
            'email' => 'siswa@gmail.com',
            'password' => Crypt::encryptString('123123'),
            'id_level_user' => 5,
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Guru',
            'email' => 'guru@gmail.com',
            'password' => Crypt::encryptString('123123'),
            'id_level_user' => 3,
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Walikelas',
            'email' => 'walikelas@gmail.com',
            'password' => Crypt::encryptString('123123'),
            'id_level_user' => 2,
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Kepala Sekolah',
            'email' => 'kepsek@gmail.com',
            'password' => Crypt::encryptString('123123'),
            'id_level_user' => 6,
        ]);

        DB::table('users')->insert([
            'nama_lengkap' => 'Keuangan',
            'email' => 'keuangan@gmail.com',
            'password' => Crypt::encryptString('123123'),
            'id_level_user' => 4,
        ]);
    }
}

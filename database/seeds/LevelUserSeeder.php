<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_level_user')->insert([
        'nama_level' => 'Admin',
        ]);
        
        DB::table('tbl_level_user')->insert([
        'nama_level' => 'Walikelas',
        ]);
        
        DB::table('tbl_level_user')->insert([
        'nama_level' => 'Guru',
        ]);
        
        DB::table('tbl_level_user')->insert([
        'nama_level' => 'Keuangan',
        ]);
        
        DB::table('tbl_level_user')->insert([
        'nama_level' => 'Siswa',
        ]);
        
        DB::table('tbl_level_user')->insert([
        'nama_level' => 'Kepala Sekolah',
        ]);
        
    }
}

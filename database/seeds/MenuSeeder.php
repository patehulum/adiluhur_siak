<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Siswa',
        'link' => 'siswa',
        'icon' => 'fa fa-users',
        'is_main_menu' => 0,
        ]);
        
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Data Guru',
        'link' => 'guru',
        'icon' => 'fa fa-user-circle',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Data Master',
        'link' => '#',
        'icon' => 'fa fa-bars',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Mata Pelajara',
        'link' => 'mapel',
        'icon' => 'fa fa-book',
        'is_main_menu' => 3,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Ruangan Kelas',
        'link' => 'ruangan',
        'icon' => 'fa fa-building',
        'is_main_menu' => 3,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Tingkat Kelas',
        'link' => 'tingkatan',
        'icon' => 'fa fa-sitemap',
        'is_main_menu' => 3,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Jurusan',
        'link' => 'jurusan',
        'icon' => 'fa fa-th-large',
        'is_main_menu' => 3,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Tahun Akademik',
        'link' => 'tahunakademik',
        'icon' => 'fa fa-calendar-check-o',
        'is_main_menu' => 3,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Kelas',
        'link' => 'kelas',
        'icon' => 'fa fa-cubes',
        'is_main_menu' => 3,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Kurikulum',
        'link' => 'kurikulum',
        'icon' => 'fa fa-list',
        'is_main_menu' => 3,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Jadwal Pelajaran',
        'link' => 'jadwal',
        'icon' => 'fa fa-calendar-plus-o',
        'is_main_menu' => 0,
        ]); 
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Peserta Didik',
        'link' => 'siswa/siswa_aktif',
        'icon' => 'fa fa-users',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Wali Kelas',
        'link' => 'walikelas',
        'icon' => 'fa fa-user-plus',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Pengguna Sistem',
        'link' => 'user',
        'icon' => 'fa fa-id-badge',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Menu',
        'link' => 'menu',
        'icon' => 'fa fa-list',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Form Pembayaran',
        'link' => 'pembayaran',
        'icon' => 'fa fa-dollar',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Nilai Akhir',
        'link' => 'nilai',
        'icon' => 'fa fa-archive',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Laporan Nilai',
        'link' => 'laporan_nilai',
        'icon' => 'fa fa-pdf-o',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Lihat Rapot',
        'link' => 'siswa/nilai_siswa_lihat',
        'icon' => 'fa fa-pdf-o',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Profile',
        'link' => 'siswa/loginSiswa',
        'icon' => 'fa fa-circle',
        'is_main_menu' => 0,
        ]);
        DB::table('tabel_menu')->insert([
        'nama_menu' => 'Approve Nilai',
        'link' => 'laporan_nilai/kepsek_lihat',
        'icon' => 'fa fa-square-o',
        'is_main_menu' => 0,
        ]);
    }
}

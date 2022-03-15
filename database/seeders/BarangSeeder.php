<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'nama' => 'Buku Tulis',
                'harga' => 10000,
                'gambar' => '/img/buku.png',
                'kategori' => 'Alat Tulis',
                'warna' => 'hijau',
            ],
            [
                'nama' => 'Papan',
                'harga' => 20000,
                'gambar' => '/img/papan.png',
                'kategori' => 'Alat Tulis',
                'warna' => 'biru',
            ],
            [
                'nama' => 'Pensil',
                'harga' => 30000,
                'gambar' => '/img/pensil.png',
                'kategori' => 'Alat Tulis',
                'warna' => 'Merah',
            ],
            [
                'nama' => 'Sepatu',
                'harga' => 40000,
                'gambar' => '/img/sepatu.png',
                'kategori' => 'Outfit Sekolah',
                'warna' => 'Hitam',
            ],
            [
                'nama' => 'Topi',
                'harga' => 50000,
                'gambar' => '/img/topi.png',
                'kategori' => 'Outfit Sekolah',
                'warna' => 'Maroon',
            ],
            [
                'nama' => 'Dasi',
                'harga' => 60000,
                'gambar' => '/img/dasi.png',
                'kategori' => 'Outfit Sekolah',
                'warna' => 'Biru',
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'namaPerusahaan' => 'PT Solo Murni',
                'noTelpPerusahaan' => '081212145672',
                'namaBarang' => 'Buku tulis',
            ],
            [
                'namaPerusahaan' => 'PT Neon Box',
                'noTelpPerusahaan' => '081212145673',
                'namaBarang' => 'Papan',
            ],
            [
                'namaPerusahaan' => 'PT Faber - Castel',
                'noTelpPerusahaan' => '081212145674',
                'namaBarang' => 'Pensil',
            ],
            [
                'namaPerusahaan' => 'PT Nagasakti',
                'noTelpPerusahaan' => '081212145675',
                'namaBarang' => 'Sepatu',
            ],
            [
                'namaPerusahaan' => 'PT Speed Jaya',
                'noTelpPerusahaan' => '081212145676',
                'namaBarang' => 'Topi',
            ],
            [
                'namaPerusahaan' => 'PT Suban Cipta',
                'noTelpPerusahaan' => '081212145677',
                'namaBarang' => 'Dasi',
            ]
        ];
        DB::table('Suppliers')->insert($data);
    }
}

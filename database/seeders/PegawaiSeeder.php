<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
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
                'nama' => 'Mahisa Aghisni Fadhli',
                'nip' => '1234509876',
                'noHp' => '081211234321',
                'alamat' => 'Mojokerto',
            ],
            [
                'nama' => 'Maygustya Judha',
                'nip' => '1234509877',
                'noHp' => '081211234322',
                'alamat' => 'Pandaan',
            ],
            [
                'nama' => 'Setyawan Gilang',
                'nip' => '1234509878',
                'noHp' => '081211234323',
                'alamat' => 'Batu',
            ],
            [
                'nama' => 'Salwa Zhafira Pratiwi Wahyudi',
                'nip' => '1234509879',
                'noHp' => '081211234324',
                'alamat' => 'Bangil',
            ],
            [
                'nama' => 'Chelsea Islan',
                'nip' => '1234509870',
                'noHp' => '081211234325',
                'alamat' => 'Amerika Serikat',
            ]
        ];
        DB::table('Pegawais')->insert($data);
    }
}

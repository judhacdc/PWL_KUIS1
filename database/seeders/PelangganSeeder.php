<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert([
            [
                'nama' => 'Judha Maygustya',
                'alamat' => 'Malang - Jawa Timur',
                'noHp' => '0898763465694',
                'jenisKelamin' => 'Laki - Laki',
            ],
            [
                'nama' => 'Firgi Sotya Izuddin',
                'alamat' => 'Pandaan - Jawa Timur',
                'noHp' => '0898763465675',
                'jenisKelamin' => 'Laki - Laki',
            ],
            [
                'nama' => 'Gilang Setyawan',
                'alamat' => 'Batu - Jawa Timur',
                'noHp' => '0898763465669',
                'jenisKelamin' => 'Laki - Laki',
            ],
            [
                'nama' => 'Nur Annisa Firdausy',
                'alamat' => 'Singosari - Jawa Timur',
                'noHp' => '0898763465679',
                'jenisKelamin' => 'Perempuan',
            ],
            [
                'nama' => 'Irma Maulidia',
                'alamat' => 'Pasuruan - Jawa Timur',
                'noHp' => '0898763465678',
                'jenisKelamin' => 'Perempuan',
            ],
            [
                'nama' => 'Bella Sonia',
                'alamat' => 'Majokerto - Jawa Timur',
                'noHp' => '0898763465671',
                'jenisKelamin' => 'Perempuan',
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'nopol' => 'AG1235RCC',
                'merk' => 'Honda',
                'jenis' => 'Brio',
                'tahun' => '2021',
                'warna' => 'Kuning'

            ],
            [
                'nopol' => 'AG1285RCC',
                'merk' => 'Toyota',
                'jenis' => ' Kijang Inova Zenix ',
                'tahun' => '2021',
                'warna' => 'Kuning'

            ]
            ]);
    }
}

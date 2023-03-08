<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_kuliah')->insert([
            [
                'kodemk' => 'RTI213008',
                'namaMatkul' => 'Praktikum Pemrograman Berbasis Objek',
                'dosen' => 'Elok Nur Hamdana, S.T, M.T.',
                'sks' => '3'
            ],
            [
                'kodemk' => 'RTI214008',
                'namaMatkul' => 'Pemrograman Web Lanjut',
                'dosen' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom.',
                'sks' => '3'
            ],
            [
                'kodemk' => 'RTI214004',
                'namaMatkul' => 'Proyek 1',
                'dosen' => 'Farid Angga Pribadi, S.Kom., M.Kom.',
                'sks' => '3'
            ],
            [
                'kodemk' => 'RTI214006',
                'namaMatkul' => 'Jaringan Komputer',
                'dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
                'sks' => '2'
            ],
            [
                'kodemk' => 'RTI214001',
                'namaMatkul' => 'Kewarganegaraan',
                'dosen' => 'Widaningsih, S.H., M.H.',
                'sks' => '2'
            ]
            
        ]);
    }
}

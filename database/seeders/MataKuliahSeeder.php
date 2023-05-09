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
                
                'nama_matkul' => 'PBO',
                'sks' => 3,
                'jam' => 6,
                'semester'=>'4'
            ],
            [
                'nama_matkul' => 'PWL',
                'sks' => 3,
                'jam' => 6,
                'semester' => '4'
            ],
            [
               
                'nama_matkul' => 'Proyek 1',
                'sks' => 3,
                'jam' => 6,
                'semester' => '4'
            ],
            [
                
                'nama_matkul' => 'Jarkom',
                'sks' => 2,
                'jam' => 6,
                'semester' => '4'
            ],
            [
               
                'nama_matkul' => 'KWN',
                'sks' => 2,
                'jam' => 6,
                'semester' => '4'
            ]
            
        ]);
       
    }
}

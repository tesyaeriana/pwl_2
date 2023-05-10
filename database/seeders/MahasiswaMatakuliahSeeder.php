<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa_matakuliah')->insert([
            [
                'id_mahasiswa' => '11',
                'matkul_id' => '1',
                'nilai' => 'A'
            ]
           
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([[
            'nama'=>'Barno',
            'hubKeluarga'=>'Bapak',
            'jk'=>'L',
            'pendAkhir'=>'SMA',
            'alamat'=>'Tulungagung',
            'ttl'=>'1971-03-03'
        ],
        [
            'nama'=>'Kamsri',
            'hubKeluarga'=>'Ibu',
            'jk'=>'P',
            'pendAkhir'=>'SMA',
            'alamat'=>'Tulungagung',
            'ttl'=>'1975-05-31'
        ],
        [
            'nama'=>'Deta Zegi Artady',
            'hubKeluarga'=>'Kakak',
            'jk'=>'L',
            'pendAkhir'=>'S1',
            'alamat'=>'Tulungagung',
            'ttl'=>'1995-02-17'
        ]
        ]);
    }
}

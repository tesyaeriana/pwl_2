<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
        
            [
                'username' => 'tesssya',
                'name' => 'Tesya Eriana',
                'email' => 'tesyaeriana12@gmail.com',
                'password' => Hash::make('1234567')
            ]

            ]);
    }
}

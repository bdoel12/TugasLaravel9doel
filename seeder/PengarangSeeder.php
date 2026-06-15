<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PengarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengarang')->insert(
            [
                [
                    'nama'  => 'Deden Hamdani',
                    'email' => 'deden@gmail.com',
                    'hp'    => '0857123456',
                    'foto'  => 'deden.jpg',
                ],
                [
                    'nama'  => 'Dedi Iskandar',
                    'email' => 'dedi@gmail.com',
                    'hp'    => '0857789456',
                    'foto'  => 'dedi.jpg',
                ],
                [
                    'nama'  => 'Siti Aminah',
                    'email' => 'siti@gmail.com',
                    'hp'    => '0813789456',
                    'foto'  => 'siti.jpg',
                ]
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            [
                'isbn'        => '111',
                'judul'       => 'Sejarah Kemerdekaan RI',
                'tahun_cetak' => 2021,
                'stok'        => 10,
                'idpengarang' => 1,
                'idpenerbit'  => 2,
                'kategori_id'  => 1,
                'cover'       => 'cover1.jpg',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'isbn'        => '112',
                'judul'       => 'Menanam Jagung Unggul',
                'tahun_cetak' => 2021,
                'stok'        => 15,
                'idpengarang' => 2,
                'idpenerbit'  => 1,
                'kategori_id'  => 3,
                'cover'       => 'cover2.jpg',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}

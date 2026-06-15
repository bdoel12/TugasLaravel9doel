<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert(
            [
                [ 'nama' => 'Sejarah' ],
                [ 'nama' => 'Sosial & Politik' ],
                [ 'nama' => 'Pertanian' ]
            ]
        );
    }
}

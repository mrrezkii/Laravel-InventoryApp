<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $kategori = new KategoriSeeder();
        $barang = new BarangSeeder();
        $kategori->run();
        $barang->run();
    }
}

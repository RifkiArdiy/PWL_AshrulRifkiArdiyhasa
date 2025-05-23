<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            LevelSeeder::class,
            UserSeeder::class,
            KategoriSeeder::class,
            BarangSeeder::class,
            SupplierSeeder::class,
            StokSeeder::class
        ]);
    }
}

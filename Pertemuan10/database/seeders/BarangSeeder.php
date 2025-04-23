<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $barang = [
            ['kategori_id' => 1, 'barang_kode' => 'TV001', 'barang_nama' => 'Televisi 42 Inch', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['kategori_id' => 1, 'barang_kode' => 'HP002', 'barang_nama' => 'Smartphone XYZ', 'harga_beli' => 5000000, 'harga_jual' => 5500000],
            ['kategori_id' => 2, 'barang_kode' => 'SHO03', 'barang_nama' => 'Sepatu Sneakers', 'harga_beli' => 400000, 'harga_jual' => 500000],
            ['kategori_id' => 2, 'barang_kode' => 'TST04', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['kategori_id' => 3, 'barang_kode' => 'MIE05', 'barang_nama' => 'Mie Instan', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['kategori_id' => 3, 'barang_kode' => 'SUS06', 'barang_nama' => 'Susu UHT', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['kategori_id' => 4, 'barang_kode' => 'NOV07', 'barang_nama' => 'Novel Fiksi', 'harga_beli' => 70000, 'harga_jual' => 100000],
            ['kategori_id' => 4, 'barang_kode' => 'KOM08', 'barang_nama' => 'Komik Manga', 'harga_beli' => 40000, 'harga_jual' => 60000],
            ['kategori_id' => 5, 'barang_kode' => 'BLN09', 'barang_nama' => 'Blender', 'harga_beli' => 250000, 'harga_jual' => 300000],
            ['kategori_id' => 5, 'barang_kode' => 'VAK10', 'barang_nama' => 'Vacuum Cleaner', 'harga_beli' => 1500000, 'harga_jual' => 1800000],
        ];

        DB::table('m_barang')->insert($barang);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) { // 10 transaksi
            $barang_ids = range(1, 10);
            shuffle($barang_ids); // Acak barang

            for ($j = 0; $j < 3; $j++) { // 3 barang per transaksi
                $barang_id = $barang_ids[$j];
                $harga = DB::table('m_barang')->where('barang_id', $barang_id)->value('harga_jual');

                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $i,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => rand(1, 5),
                ]);
            }
        }
    }
}

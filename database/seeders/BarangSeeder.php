<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            // Elektronik (kategori_id = 1)
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Smartphone Samsung A14',
                'harga_beli' => 2000000,
                'harga_jual' => 2500000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Laptop Asus Vivobook',
                'harga_beli' => 6500000,
                'harga_jual' => 7000000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'TV LED 32 Inch',
                'harga_beli' => 1800000,
                'harga_jual' => 2200000,
            ],
            
            // Fashion (kategori_id = 2)
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Kaos Polos Putih',
                'harga_beli' => 40000,
                'harga_jual' => 55000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Celana Jeans Pria',
                'harga_beli' => 120000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Sepatu Olahraga',
                'harga_beli' => 180000,
                'harga_jual' => 230000,
            ],
            
            // Makanan (kategori_id = 3)
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2500,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Kopi Kapal Api',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            
            // Alat Tulis (kategori_id = 4)
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Buku Tulis 38 Lembar',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            
            // Otomotif (kategori_id = 5)
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Oli Mesin 1L',
                'harga_beli' => 40000,
                'harga_jual' => 55000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}

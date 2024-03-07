<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
   
    public function run(): void
    {
        $data=[
            [
                'barang_id' => 1,
                'category_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Nasi Kuning',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 2,
                'category_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Nasi Lemak',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 3,
                'category_id' => 2,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Ice Americano',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 4,
                'category_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Choco latte',
                'harga_beli' => 6000,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 5,
                'category_id' => 3,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Crackers',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 6,
                'category_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Candy',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 7,
                'category_id' => 4,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Spoon',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 8,
                'category_id' => 4,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Fork',
                'harga_beli' => 4000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 9,
                'category_id' => 5,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Soap',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 10,
                'category_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Shampoo',
                'harga_beli' => 15000,
                'harga_jual' => 17000,
            ],
            [
                'barang_id' => 11,
                'category_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Conditioner',
                'harga_beli' => 15000,
                'harga_jual' => 17000,
            ],
            [
                'barang_id' => 12,
                'category_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Face Wash',
                'harga_beli' => 15000,
                'harga_jual' => 17000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
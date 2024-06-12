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
            [

                'kategori_id' => '3',
                'barang_kode' => '001',
                'barang_nama' => 'Gula Pasir',
                'harga_beli' => '15000',
                'harga_jual' => '17000'
            ],
            [
                'kategori_id' => '3',
                'barang_kode' => '002',
                'barang_nama' => 'Minyak Goreng',
                'harga_beli' => '14000',
                'harga_jual' => '16000'
            ],
            [
                'kategori_id' => '3',
                'barang_kode' => '003',
                'barang_nama' => 'Tepung Terigu',
                'harga_beli' => '10000',
                'harga_jual' => '11500'
            ],
            [
                'kategori_id' => '1',
                'barang_kode' => '004',
                'barang_nama' => 'Telur Ayam',
                'harga_beli' => '25000',
                'harga_jual' => '26000'
            ],
            [
                'kategori_id' => '3',
                'barang_kode' => '005',
                'barang_nama' => 'Kentang',
                'harga_beli' => '17000',
                'harga_jual' => '18000'
            ],
            [
                'kategori_id' => '1',
                'barang_kode' => '006',
                'barang_nama' => 'Sereal',
                'harga_beli' => '20000',
                'harga_jual' => '22000'
            ],
            [
                'kategori_id' => '1',
                'barang_kode' => '007',
                'barang_nama' => 'Chitato',
                'harga_beli' => '28000',
                'harga_jual' => '30000'
            ],
            [
                'kategori_id' => '2',
                'barang_kode' => '008',
                'barang_nama' => 'Susu Bubuk',
                'harga_beli' => '40000',
                'harga_jual' => '42000'
            ],
            [
                'kategori_id' => '2',
                'barang_kode' => '009',
                'barang_nama' => 'Susu UHT',
                'harga_beli' => '20000',
                'harga_jual' => '21000'
            ],
            [
                'kategori_id' => '2',
                'barang_kode' => '010',
                'barang_nama' => 'Susus Kental Manis',
                'harga_beli' => '12000',
                'harga_jual' => '12000'
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
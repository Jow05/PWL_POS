<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        $data = [
            ['category_id' => 1, 'category_nama'=>'Snacks', 'category_kode' => '1' ],
            ['category_id' => 2, 'category_nama'=>'Baverages', 'category_kode' => '2' ],
            ['category_id' => 3, 'category_nama'=>'Foods', 'category_kode' => '3' ],
            ['category_id' => 4, 'category_nama'=>'Tools', 'category_kode' => '4'],
            ['category_id' => 5, 'category_nama'=>'Others', 'category_kode' => '5'],


        ];
        DB::table('m_category')->insert($data);
    }
}
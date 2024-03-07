<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        /*$data = [
            'category_kode' => 'SNK',
            'category_nama' => 'Snack/Makanan Ringan',
            'created_at' => now()
        ];
        DB::table('m_category')->insert($data);
        return 'Insert data baru berhasil';*/

        //$row = DB::table('m_category')->where('category_kode', 'SNK')->update(['category_nama'=>'Camilan']);
        //return 'Update data berhasil. Jumlah data yang diupdate: ' .$row.' baris';

        //$row = DB::table('m_category')->where('category_kode', 'SNK')->delete();
        //return 'Delete data berhasil. Jumlah data yang diahapus: '.$row.' baris';

        $data = DB::table('m_category')->get();
        return view('kategori', ['data' => $data]);
    }
}

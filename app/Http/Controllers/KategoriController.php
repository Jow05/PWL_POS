<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
    public function create()
    {
        return view('kategori.create');
    }
    public function store(Request $request): RedirectResponse{
        // $validated = $request->validate([
        //     'kategori_kode'=> 'bail|required',
        //     'kategori_nama'=> 'required'
        // ]);
        $validated = $request->validated();
        $validated = $request->safe()->only(['category_kode', 'category_nama']);
        $validated = $request->safe()->except(['category_kode', 'category_nama']);
        // KategoriModel::create($validated);
        return redirect('/kategori');
    }
    
    public function edit($id) {
        $data = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $data]);
    }

    public function update(Request $request, $id) {
        $data = KategoriModel::find($id);
        $data->kategori_kode = $request->kategori_kode;
        $data->kategori_nama = $request->kategori_nama;
        $data->save();
        return redirect('/kategori');
    }
    public function destroy(string $id) {
        // Temukan kategori yang akan dihapus
        $kategori = KategoriModel::find($id);
    
        // Pastikan kategori ditemukan
        if (!$kategori) {
            return redirect('/kategori')->with('error', 'Kategori tidak ditemukan.');
        }
    
        // Periksa apakah ada data terkait di tabel barang
        $relatedDataExists = MBarang::where('category_id', $id)->exists();
    
        // Jika ada data terkait, berikan pesan error
        if ($relatedDataExists) {
            return redirect('/kategori')->with('error', 'Tidak dapat menghapus kategori karena terdapat data terkait di tabel barang.');
        }
    
        // Hapus kategori jika tidak ada data terkait
        $kategori->delete();
    
        return redirect('/kategori')->with('success', 'Kategori berhasil dihapus.');
    }
    

    //public function destroy($id) {
        //$data = KategoriModel::destroy($id);
        //return redirect('/kategori');
    //}
    //Jobsheet 4
    // public function index()
    // {
        /*$data = [
            'category_kode' => 'SNK',
            'category_nama' => 'Snack/Makanan Ringan',
            'created_at' => now()
        ];
        DB::table('m_category')->insert($data);
        return 'Insert data baru berhasil'; */
//The m_category table will add new data, namely category_code = SNK, category_name = Snack / Snacks, created_at = now / the day the data is inputted.
//When running the above code, it errors because it cannot add or update child rows with foreign key constraints failed ('pwl_pos', 'm_user', CONSTRAINT 'm_user_level_id_foreign' FOREIGN KEY('level_id') REFERENCE 'm_level'('level_id'))

        // $row = DB::table('m_category')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: '. $row.' baris';
//In the m_category table, the category_name data that was previously Snack / Snacks is updated to snacks.

        // $row = DB::table('m_category')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus '. $row.' baris';

    //     $data = DB::table('m_category')->get();
    //     return view('kategori', ['data' => $data]);
    // }
}
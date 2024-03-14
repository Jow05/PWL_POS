<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::where('username', 'manager9')->firstOrFail();
        return view('user', ['data' => $user]);

        //$user = UserModel::findOrFail(1);
        //return view ('user', ['data' => $user]);
    }
}



/* Jobsheet 4
//prac 2.2
step 3
$user = UserModel::where('username', 'manager9')->firstOrFail();
        return view('user', ['data' => $user]);
step 1
$user = UserModel::findOrFail(1);
        return view('user', ['data' => $user]);
//Prac 2.1
Step 10
        $user = UserModel::findOr(20, ['username', 'nama'], function () {
            abort(404);
        });
        return view('user', ['data' => $user]);

        /*Step 8
        $user = UserModel::findor(1, ['username', 'nama'], function () {
            abort(404);
        });
        return view('user', ['data' => $user]);*/

        /*Step 6
        $user = UserModel::firstWhere('level_id', 1);
        return view('user', ['data' => $user]);*/

        /*Step 4
        $user = UserModel::where('level_id',1)->first();
        return view('user', ['data' => $user]);*/
        
        /*Step 1
        $user = UserModel::find(1);
        return view('user', ['data' => $user]);
$data = [
    'level_id' => 2,
    'username' => 'manager_dua',
    'nama' => 'Manager 2',
    'password' => Hash::make('12345')
];
$data = [
    'level_id' => 2,
    'username'=> 'manager_tiga',
    'nama' => 'Manager 3',
    'password' => Hash::make('12345')
];
UserModel::create($data);

$user = UserModel::all();
return view('user', ['data' => $user]);

Jobsheet 3
        /tambah data user dengan Eloquent Model
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data); //update data user
        $data = [
            'username' => 'customer-1',
            'nama' => 'Pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 4
        ];
        UserModel::insert($data); //tambahkan data ke tabel m_user
        
        //coba akses model usermodel
        $user = UserModel::all(); //ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);*/
    
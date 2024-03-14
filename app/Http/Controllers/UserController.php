<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::create([
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ]);
        
        $user->username = 'manager12';

        $user->save();

        $user->wasChanged();//true
        $user->wasChanged('username');//true
        $user->wasChanged('username', 'level_id');//true
        $user->wasChanged('nama');//false
        $user->wasChanged('nama', 'username');//true
        dd($user->wasChanged(['nama', 'username'])); //true
    }
}
/*
//step 1
$user = UserModel::firstOrCreate(
            [
                'username' => 'manager',
                'nama' => 'Manager',
            ],
            );
            return view('user',['data' => $user]);
 //step  6         
$user = UserModel::firstOrNew(
    [
        'username' => 'manager',
        'nama' => 'Manager',
    ],
    );
    step 8
    $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],*/



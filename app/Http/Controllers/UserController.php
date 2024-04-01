<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //Jobsheet 3
        //tambah data user dengan Eloquent Model
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data); //update data user
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data); //tambahkan data ke tabel m_user
        
        //Jobsheet4 practicum1
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);
        
        //J4 practicum 2.1
        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // $user = UserModel::findOr(20, ['username', 'nama'], function (){
        //     abort(404);
        // });
//In step 1 using the find method ($user = UserModel::find(1);) it will retrieve a specific primary key record in the case of the code retrieving the m_user data with primary key value 1.
//In step 4 using the first method ($user = UserModel::where('level_id', 1)->first();) it will retrieve records based on level_id in the case that the code retrieves m_user data with level_id value 1.
//In step 6 using the firstWhere method ($user = UserModel::firstWhere('level_id', 1);) Similar to before, the code will retrieve records based on certain criteria, in this case the code retrieves m_user data with level_id worth 1.
//As a result a record with primary key 1 is found, the $user variable will contain that record and the 'user' page will be displayed with that data. However, if there is no record with primary key 1, a 404 error page will be displayed.
//The result is 'page not found 404' because there is no record with primary key 20.

        //J4 Practicum 2.2
        // $user = UserModel::findOrFail(1);
        // $user = UserModel::where('username', 'manager9')->firstOrFail();
//In step 1 the FindOrFail method searches for records based on a specific primary key, if the record is not found it will throw a ModelNotFoundException exception. In this case, the record is found, resulting in user data based on the primary key searched.
//There are no records with the data 'manager9' the result is page not found

        //J4 Practicum 2.3
        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);
//When running the code web page will be appear '2 // app\Http\Controllers\UserController.php:50'. This code will count the number of users who have a level_id equal to 2, print the value for debugging, and then render the 'user' view with the user count data.

        //J4 Practicum 2.4
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' =>'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345');
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();
        // return view('user', ['data' => $user]);
//In step 1, the code is used to create new user data in the database using the firstOrCreate method. 
//In this case, create new data in database that is username 'manager22', name 'Manager Dua Dua', level_id '2'.
//The firstOrNew method retrieves the data you want to search if the data you are looking for is in the database then the results you are looking for will be displayed.
//In step 8, the database does not display the new data results because the inputted data has not been saved.
//In step 10, the database displays the new data results because the inputted data has been saved by the save() method.
    
    //J4 Practicum 2.5
    // $user = UserModel::create([
    //     'username' => 'manager11',
    //     'nama' => 'Manager11',
    //     'password' => Hash::make('12345'),
    //     'level_id' => 2,
    // ]);

    // $user->username = 'manager12';

    // $user->isDirty(); //true
    // $user->isDirty('username'); //true
    // $user->isDirty('nama'); //false
    // $user->isDirty(['nama', 'username']); //true

    // $user->isClean(); //false
    // $user->isClean('username'); //false
    // $user->isClean('nama'); //true
    // $user->isClean(['nama', 'username']); //false

    // $user->save();

    // $user->isDirty(); //false
    // $user->isClean(); //true
    // dd($user->isDirty());

    // $user->wasChanged(); //true
    // $user->wasChanged('username');//true
    // $user->wasChanged(['username', 'level_id']);//true
    // $user->wasChanged('nama'); //false
    // dd($user->wasChanged(['nama', 'username']));//true
//In step 1, the result of $user->isDirty() returning false indicates that no changes were detected in the $user model after the save() method call.
//In step 2, the result is true because the $user->wasChanged() method is useful for checking whether any changes have been made to the model after a save operation has been performed, and can be used to perform validation or other operations based on those changes.
    //J4 Practicum 2.7
    $user = UserModel::with('level')->get();
    // dd($user);
    return view('user', ['data' => $user]);

    //J4 Practicum 2.6
    $user = UserModel::all();
    return view('user', ['data'=>$user]);
    
    }
    public function tambah()
    {
        return view('user_tambah');
    }
    
    public function tambahSimpan(Request $request){
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id 
        ]);
        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data'=>$user]);
    }


    public function ubah_simpan($id, Request $request){
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
//The webpage will load the user data from the database and display the 'Add User' link that leads to the 'user/add' route and 'Delete' that leads to the '/user/delete' route.
//The web page shows an error because Route [/user/add_save] not defined.
//When you click '+add user', the web page will load the add user form and you can fill in the form and click the 'save' button to save it.
//The web page will be show 'Form Ubah Data User' when cliking 'Change' button.
//When clicking the 'Change' button, the data will change.
//When clicking the 'Hapus' button, the selected data will be deleted

}
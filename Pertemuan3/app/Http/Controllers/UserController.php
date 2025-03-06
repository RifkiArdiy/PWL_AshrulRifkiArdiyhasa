<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($id, $name)
    {
        // Cari user berdasarkan ID dan nama
        $user = User::where('id', $id)->where('name', $name)->first();

        if (!$user) {
            return abort(404, 'User not found');
        }

        return view('users.profile', compact('user'));
    }

    public function index()
    {
        // tambah data user dengan Eloquent Model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data); // tambahkan data ke tabel m_user

        // tambah data user dengan Eloquent Model
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data); // update data user

        // coba akses model UserModel
        $user = UserModel::all(); // ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
    }
}

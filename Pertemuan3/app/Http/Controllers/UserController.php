<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}

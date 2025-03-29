<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function hello()
    {
        // return view('blog.hello', ['name' => 'Andi']);

        // return view('hello', ['name' => 'Andi']);

        return view('hello')
            ->with('name', 'Andi')
            ->with('occupation', 'Astronaut');
    }

    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Selamat datang',
            'list' => ['Home', 'Welcome'],
        ];
        $activeMenu = 'dashboard';
        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function greeting()
    {
        // return view('hello', ['name' => 'Ashrul Rifki Ardiyhasa']);
        return view('hello')
            ->with('name', 'Ashrul Rifki Ardiyhasa')
            ->with('occupation', 'Astronaut');
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return 'Hello World';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

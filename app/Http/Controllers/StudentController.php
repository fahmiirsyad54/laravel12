<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student',[
            'title' => 'Students',
            'students' => [
                [
                'name' => 'Nabil Assidqi',
                'grade' => '11 PPLG 1',
                'email' => 'nabil@mail.com',
                'address' => 'Jl. jalan aja'
                ],
                [
                    'name' => 'Rendi',
                    'grade' => '11 PPLG 1',
                    'email' => 'nabil@mail.com',
                    'address' => 'Jl. jalan aja'
                ],
                [
                    'name' => 'Ananta',
                    'grade' => '11 PPLG 1',
                    'email' => 'nabil@mail.com',
                    'address' => 'Jl. jalan aja'
                ]
            ]
        ]);
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

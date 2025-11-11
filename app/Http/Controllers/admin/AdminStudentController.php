<?php

namespace App\Http\Controllers\admin;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(10);
        $classrooms = Classroom::all();

        return view('admin.student.index',[
            'title' => 'Students',
            'students' => $students,
            'classrooms' => $classrooms,
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
        // 🛡️ Validasi input
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'classroom_id' => 'required|exists:classrooms,id',
            'email'        => 'required|email|unique:students,email',
            'address'      => 'nullable|string|max:255',
        ]);

        // 💾 Simpan ke database
        Student::create($validated);

        // 🔁 Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Student successfully added!');
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

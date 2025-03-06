<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $program = Program::all();
        return view('admin.program.index', compact('program'));
    }

    public function create() {
        return view('admin.program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'program'   => 'required|unique:program,program',
        ]);

        Program::create([
            'program'   => $request->program
        ]);

        return redirect()->route('program.index')->with('success', 'Berhasil Menambahkan Data Program');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $program = Program::findOrFail($id);
        return view('admin.program.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'program'   => 'required|unique:program,program',
        ]);

        $program = Program::findOrFail($id);
        $program->update([
            'program'   => $request->program
        ]);

        return redirect()->route('program.index')->with('success', 'Data Berhasil DiUpdate');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect()->route('program.index')->with('success', 'Berhasil Menghapus Program');
    }
}

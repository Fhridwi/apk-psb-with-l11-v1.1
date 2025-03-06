<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('admin.sekolah.index', compact('sekolah'));
    }

    public function create() {
        return view('admin.sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'sekolah'   => 'required|unique:sekolah,sekolah',
            'jenjang'   => 'required',
        ]);

        Sekolah::create([
            'sekolah'   => $request->sekolah,
            'jenjang'   => $request->jenjang
        ]);

        return redirect()->route('sekolah.index')->with('success', 'Data Sekolah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $sekolah = sekolah::findOrFail($id);
        return view('admin.sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        $request->validate([
            'sekolah'   => 'required',
            'jenjang'   => 'required',
        ]);

        $sekolah = sekolah::findOrFail($id);
        $sekolah->update([
            'sekolah'   => $request->sekolah,
            'jenjang'   => $request->jenjang
        ]);

        return redirect()->route('sekolah.index')->with('success', 'Berhasil Memperbarui Data');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->delete();

        return redirect()->route('sekolah.index')->with('success', 'Data Sekolah berhasil dihapus.');
    }
}

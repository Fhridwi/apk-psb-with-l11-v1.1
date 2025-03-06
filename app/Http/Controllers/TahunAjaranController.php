<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Menampilkan daftar Tahun Ajaran.
     */
    public function index()
    {
        $tahunAjaran = TahunAjaran::all();
        return view('admin.tahunAjaran.index', compact('tahunAjaran'));
    }

    /**
     * Menampilkan form tambah Tahun Ajaran.
     */
    public function create()
    {
        return view('admin.tahunAjaran.create');
    }

    /**
     * Menyimpan data Tahun Ajaran baru ke database.
     */
    public function store(Request $request)
    {

        

        $request->validate([
            'tahun'  => 'required|string|unique:tahun_ajaran,tahun',
            'kuota'  => 'required|integer',
            'status' => 'required|in:dibuka,ditutup' 
        ]); 

        TahunAjaran::create([
            'tahun'  => $request->tahun,
            'kuota'  => $request->kuota,
            'status' => $request->status,
        ]);

        return redirect()->route('tahun.index')->with('success', 'Tahun Ajaran berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit Tahun Ajaran.
     */
    public function edit($id)
    {
        $tahunAjaran = TahunAjaran::findOrFail($id);
        return view('admin.tahunAjaran.edit', compact('tahunAjaran'));
    }

    /**
     * Memperbarui data Tahun Ajaran.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun'  => 'required|string|unique:tahun_ajaran,tahun,' . $id,
            'kuota'  => 'required|integer',
            'status' => 'required|in:dibuka,ditutup' 
        ]);

        $tahunAjaran = TahunAjaran::findOrFail($id);
        $tahunAjaran->update([
            'tahun'  => $request->tahun,
            'kuota'  => $request->kuota,
            'status' => $request->status
        ]);

        return redirect()->route('tahun.index')->with('success', 'Tahun Ajaran berhasil diperbarui.');
    }

    /**
     * Menghapus Tahun Ajaran.
     */
    public function destroy($id)
    {
        $tahunAjaran = TahunAjaran::findOrFail($id);
        $tahunAjaran->delete();

        return redirect()->route('tahun.index')->with('success', 'Tahun Ajaran berhasil dihapus.');
    }
}

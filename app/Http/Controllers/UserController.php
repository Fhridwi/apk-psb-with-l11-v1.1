<?php

namespace App\Http\Controllers;

use App\Models\DokumenSantri;
use App\Models\OrangTua;
use App\Models\Program;
use App\Models\ProgramSekolah;
use App\Models\Santri;
use App\Models\Sekolah;
use App\Models\TahunAjaran;
use App\Models\Wali;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {

        $tahunAjaran = TahunAjaran::where('status', 'dibuka')->get();
        $sekolah = Sekolah::all();
        $program = Program::all();
        $year = date('Y'); 
         $randomNumber = mt_rand(10000, 99999); 
         $no_pendaftaran = 'PSB-' . $year . $randomNumber;


        return view('from', compact('tahunAjaran', 'sekolah', 'program', 'no_pendaftaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $request->validate([
            'no_pendaftaran'    => 'required|unique:santri,no_pendaftaran,',
            'nama_lengkap'  => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'anak_ke' => 'required|integer',
            'alamat' => 'required|string',
            'asal_sekolah' => 'required|string',
            'program' => 'required',
            'sekolah' => 'required',

            'nama_ayah' => 'required|string',
            'pekerjaan_ayah' => 'nullable|string',
            'penghasilan_ayah' => 'required|numeric',
            'status_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'pekerjaan_ibu' => 'nullable|string',
            'penghasilan_ibu' => 'required|numeric',
            'status_ibu' => 'required|string',
            'alamat_orang_tua' => 'required|string',
            'nomor_hp_orang_tua' => 'required|string',
            'email_wali' => 'email',
            'email_orang_tua' => 'email|nullable',

            'scan_foto' => 'nullable|image',
            'scan_kk' => 'nullable|image',
            'scan_ktp_ayah' => 'nullable|image',
            'scan_ktp_ibu' => 'nullable|image'
        ]);

        

        // Cek apakah santri dengan nama & tanggal lahir sudah ada
        if (Santri::where('nama_lengkap', $request->nama_lengkap)
            ->where('tanggal_lahir', $request->tanggal_lahir)
            ->exists()
        ) {
            return redirect()->back()->with('error', 'Santri dengan data ini sudah terdaftar.');
        }

        // Simpan data orang tua (gunakan firstOrCreate untuk mencegah duplikasi)
        $orangTua = OrangTua::firstOrCreate([
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
        ], [
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'status_ayah' => $request->status_ayah,
            'status_ibu' => $request->status_ibu,
            'alamat_orang_tua' => $request->alamat_orang_tua,
            'nomor_hp_orang_tua' => $request->nomor_hp_orang_tua,
            'email_orang_tua'   => $request->email_orang_tua
        ]);

        // Simpan data wali jika ada
        $wali = null;
        if ($request->hubungan_wali && !in_array($request->hubungan_wali, ['Ayah', 'Ibu'])) {
            $wali = Wali::firstOrCreate(
                ['nama_wali' => $request->nama_wali],
                [
                    'hubungan_wali' => $request->hubungan_wali,
                    'pekerjaan_wali' => $request->pekerjaan_wali,
                    'penghasilan_wali' => $request->penghasilan_wali,
                    'alamat_wali' => $request->alamat_wali,
                    'nomor_hp_wali' => $request->nomor_hp_wali,
                    'email_wali'   => $request->email_wali

                ]
            );
        }

        // Simpan dokumen
        $dokumen = new DokumenSantri();
        foreach (['scan_foto', 'scan_kk', 'scan_ktp_ayah', 'scan_ktp_ibu'] as $field) {
            if ($request->hasFile($field)) {
                $dokumen->$field = $request->file($field)->store('dokumen', 'public');
            }
        }
        $dokumen->save();

        // Simpan program sekolah
        $programSekolah = ProgramSekolah::firstOrCreate([
            'sekolah' => $request->sekolah,
            'program' => $request->program
        ]);

        // Simpan data santri
        Santri::create([
            'no_pendaftaran' => $request->no_pendaftaran,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'anak_ke' => $request->anak_ke,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat' => $request->alamat,
            'program_sekolah_id' => $programSekolah->id,
            'tahun_id'  => $request->tahun_ajaran,
            'orang_tua_id' => $orangTua->id,
            'wali_id' => $wali ? $wali->id : null,
            'dokumen_santri_id' => $dokumen->id
        ]);

        return redirect()->route('home')->with('success', 'Selamattt! Anda Berhasil Mendaftar!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

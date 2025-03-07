<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CalonSantriController extends Controller
{
    public function index(Request $request) {
        // Ambil input pencarian dari form
        $search = $request->input('search');
    
        
        $santri = Santri::where('status_pendaftaran', 'Diterima')
                        ->when($search, function ($query) use ($search) {
                            return $query->where(function ($q) use ($search) {
                                $q->where('nama_lengkap', 'like', "%$search%")
                                  ->orWhere('no_pendaftaran', 'like', "%$search%");
                            });
                        })
                        ->paginate(10);
    
        return view('admin.calonSantri.index', compact('santri'));
    }

    public function exportPDF($id) {
        //ambil santri sesuai uuid nya
        $santri = Santri::with(['wali', 'programSekolah', 'tahunAjaran', 'dokumenSantri'])->where('id', $id)->firstOrFail();
        $tahun = TahunAjaran::where('status', 'dibuka')->first(); 

        //load view data santri
        $pdf = PDF::loadView('admin.calonSantri.bukti', compact('santri', 'tahun'));
        $filename = 'Bukti-' . $santri->no_pendaftaran . '.pdf';
        // return $pdf->download($filename);
        return $pdf->stream($filename);
    }
    
    
}

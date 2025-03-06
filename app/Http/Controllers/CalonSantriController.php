<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

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
    
    
}

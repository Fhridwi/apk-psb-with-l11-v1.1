<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class CalonSantriController extends Controller
{
    public function index() {
        $santri = Santri::where('status_pendaftaran', 'Diterima')
                        ->paginate(10); // Sesuaikan jumlah per halaman
    
        return view('admin.calonSantri.index', compact('santri'));
    }
    
}

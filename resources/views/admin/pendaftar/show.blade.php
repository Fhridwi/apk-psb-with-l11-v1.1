@extends('layouts.app')

@section('title','Show Pendaftar')

@section('content')
<div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-white">Detail Santri</h5>
            <div>
                <!-- Tombol Export PDF -->
                <a href="#" class="btn btn-danger btn-sm">
                    <i class="fas fa-file-pdf"></i> Export PDF
                </a>
                <!-- Tombol Export Excel -->
                <a href="#" class="btn btn-success btn-sm">
                    <i class="fas fa-file-excel"></i> Export Excel
                </a>
                <!-- Dropdown Verifikasi -->
                <div class="btn-group">
                    <button type="button" class="btn btn-info text-white btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-check-circle"></i> Verifikasi
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item update-status" href="#" data-id="{{ $santri->id }}" data-status="Pending">🟡 Pending</a></li>
                        <li><a class="dropdown-item update-status" href="#" data-id="{{ $santri->id }}" data-status="Memverifikasi">🔵 Memverifikasi</a></li>
                        <li><a class="dropdown-item update-status" href="#" data-id="{{ $santri->id }}" data-status="Diterima">🟢 Diterima</a></li>
                        <li><a class="dropdown-item update-status" href="#" data-id="{{ $santri->id }}" data-status="Ditolak">🔴 Ditolak</a></li>
                    </ul>
                </div>                
            </div>
        </div>
    </div>
    
    
    <div class="card-body">
        <div class="row">
            <!-- Bagian Pas Foto -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('storage/' . $santri->DokumenSantri->scan_foto) }}" class="img-fluid rounded shadow"
                    alt="Pas Foto Santri" style="max-height: 250px;">
                <h6 class="mt-2">{{ $santri->nama_lengkap }}</h6>
            </div>

            <!-- Bagian Detail Data -->
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th width="35%">Nomor Pendaftaran</th>
                        <td>{{ $santri->no_pendaftaran }}</td>
                    </tr>
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>{{ $santri->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <td>{{ $santri->tempat_lahir }}, {{ \Carbon\Carbon::parse($santri->tanggal_lahir)->translatedFormat('d F Y') }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>
                            @if($santri->jenis_kelamin == 'L')
                                <span class="badge bg-info">Laki-laki</span>
                            @else
                                <span class="badge bg-info">Perempuan</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Anak Ke</th>
                        <td>{{ $santri->anak_ke }}</td>
                    </tr>
                    <tr>
                        <th>Asal Sekolah</th>
                        <td>{{ $santri->asal_sekolah }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $santri->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Program</th>
                        <td>{{ $santri->ProgramSekolah->program }}</td>
                    </tr>
                    <tr>
                        <th>Sekolah</th>
                        <td>{{ $santri->ProgramSekolah->sekolah }}</td>
                    </tr>
                    <tr>
                        <th>Status Pendaftaran</th>
                        <td class="font-bold badge text-white 
                            {{ $santri->status_pendaftaran == 'Pending' ? 'bg-warning' : 
                               ($santri->status_pendaftaran == 'Memverifikasi' ? 'bg-primary' : 
                               ($santri->status_pendaftaran == 'Diterima' ? 'bg-success' : 
                               ($santri->status_pendaftaran == 'Ditolak' ? 'bg-danger' : 'bg-secondary'))) }}">
                            {{ $santri->status_pendaftaran }}
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>

        <div class="row">
            <!-- Data Orang Tua -->
            <div class="col-md-6">
                <div class="card shadow-lg mt-4">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0 text-white">Data Orang Tua</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Data Ayah -->
                            <div class="col-md-6">
                                <table class="table table-striped">
                                    <tr>
                                        <th width="40%">Nama Ayah</th>
                                        <td>{{ $santri->OrangTua->nama_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pekerjaan</th>
                                        <td>{{ $santri->OrangTua->pekerjaan_ayah ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Penghasilan</th>
                                        <td>
                                            @if ($santri->OrangTua->penghasilan_ayah == 0)
                                                Tidak Bekerja
                                            @elseif ($santri->OrangTua->penghasilan_ayah == 1000000)
                                                Rp.1.000.000 - Rp.2.000.000
                                            @elseif ($santri->OrangTua->penghasilan_ayah == 2000000)
                                                Rp.2.000.000 - Rp.3.000.000
                                            @elseif ($santri->OrangTua->penghasilan_ayah == 3000000)
                                                Rp.3.000.000 - Rp.5.000.000
                                            @elseif ($santri->OrangTua->penghasilan_ayah == 5000000)
                                                Rp.5.000.000 - Rp.10.000.000
                                            @else
                                                Lebih dari Rp.10.000.000
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ ucfirst($santri->OrangTua->status_ayah) }}</td>
                                    </tr>
                                </table>
                            </div>
        
                            <!-- Data Ibu -->
                            <div class="col-md-6">
                                <table class="table table-striped">
                                    <tr>
                                        <th width="40%">Nama Ibu</th>
                                        <td>{{ $santri->OrangTua->nama_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pekerjaan</th>
                                        <td>{{ $santri->OrangTua->pekerjaan_ibu ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Penghasilan</th>
                                        <td>
                                            @if ($santri->OrangTua->penghasilan_ibu == 0)
                                                Tidak Bekerja
                                            @elseif ($santri->OrangTua->penghasilan_ibu == 1000000)
                                                Rp.1.000.000 - Rp.2.000.000
                                            @elseif ($santri->OrangTua->penghasilan_ibu == 2000000)
                                                Rp.2.000.000 - Rp.3.000.000
                                            @elseif ($santri->OrangTua->penghasilan_ibu == 3000000)
                                                Rp.3.000.000 - Rp.5.000.000
                                            @elseif ($santri->OrangTua->penghasilan_ibu == 5000000)
                                                Rp.5.000.000 - Rp.10.000.000
                                            @else
                                                Lebih dari Rp.10.000.000
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ ucfirst($santri->OrangTua->status_ibu) }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Informasi Kontak Orang Tua -->
            <div class="col-md-6">
                <div class="card shadow-lg mt-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0 text-white">Informasi Kontak Orang Tua</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th width="40%">Alamat</th>
                                <td>{{ $santri->OrangTua->alamat_orang_tua }}</td>
                            </tr>
                            <tr>
                                <th>No HP</th>
                                <td>{{ $santri->OrangTua->nomor_hp_orang_tua }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        
            {{-- <!-- Data Wali -->
            <div class="col-md-6">
                <div class="card shadow-lg mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white">Data Wali</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th width="40%">Nama Wali</th>
                                <td>{{ $santri->wali->nama_wali ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>{{ $santri->wali->pekerjaan_wali ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Penghasilan</th>
                                <td>
                                    @if ($santri->wali->penghasilan_wali == 0)
                                        Tidak Bekerja
                                    @elseif ($santri->penghasilan_wali == 1000000)
                                        Rp.1.000.000 - Rp.2.000.000
                                    @elseif ($santri->penghasilan_wali == 2000000)
                                        Rp.2.000.000 - Rp.3.000.000
                                    @elseif ($santri->penghasilan_wali == 3000000)
                                        Rp.3.000.000 - Rp.5.000.000
                                    @elseif ($santri->penghasilan_wali == 5000000)
                                        Rp.5.000.000 - Rp.10.000.000
                                    @else
                                        Lebih dari Rp.10.000.000
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $santri->wali->alamat_wali ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Nomor HP</th>
                                <td>{{ $santri->wali->nomor_hp_wali ?? '-' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> --}}
        
        <!-- Dokumen Santri -->
<div class="col-md-6">
    <div class="card shadow-lg mt-4">
        <div class="card-header bg-secondary text-white">
            <h5 class="mb-0 text-white">Dokumen Santri</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th width="40%">Foto</th>
                    <td>
                        @if ($santri->DokumenSantri->scan_foto)
                            <img src="{{ asset('storage/' . $santri->DokumenSantri->scan_foto) }}" class="img-thumbnail" width="150">
                        @else
                            -
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Scan Kartu Keluarga</th>
                    <td>
                        @if ($santri->DokumenSantri->scan_kk)
                            <a href="{{ asset('storage/' . $santri->DokumenSantri->scan_kk) }}" target="_blank" class="btn btn-info btn-sm">Lihat Dokumen</a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Scan KTP Ayah</th>
                    <td>
                        @if ($santri->DokumenSantri->scan_ktp_ayah)
                            <a href="{{ asset('storage/' . $santri->DokumenSantri->scan_ktp_ayah) }}" target="_blank" class="btn btn-info btn-sm">Lihat Dokumen</a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Scan KTP Ibu</th>
                    <td>
                        @if ($santri->DokumenSantri->scan_ktp_ibu)
                            <a href="{{ asset('storage/' . $santri->DokumenSantri->scan_ktp_ibu) }}" target="_blank" class="btn btn-info btn-sm">Lihat Dokumen</a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

        </div>
        

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
          $(document).ready(function() {
    $(".update-status").click(function(e) {
        e.preventDefault();
        
        let id = $(this).data("id");
        let status_pendaftaran = $(this).data("status");

        Swal.fire({
            title: "Konfirmasi",
            text: "Apakah Anda yakin ingin mengubah status?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Ubah!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/data-pendaftar/" + id,
                    type: "PUT",
                    data: {
                        _token: "{{ csrf_token() }}",
                        status_pendaftaran: status_pendaftaran // Sesuaikan dengan nama kolom
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire("Berhasil!", response.message, "success").then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire("Gagal!", response.message, "error");
                        }
                    },
                    error: function() {
                        Swal.fire("Oops!", "Terjadi kesalahan, coba lagi!", "error");
                    }
                });
            }
        });
    });
});

            </script>
            
        

@endsection
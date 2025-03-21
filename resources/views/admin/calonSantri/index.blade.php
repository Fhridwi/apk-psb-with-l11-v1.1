@extends('layouts.app')

@section('title', 'Data Santri')

@section('content')

    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Data Santri</h4>
                    </div>

                    <div class="card-body">
                        {{-- Form Search dan Filter --}}
                        <form action="{{ url('admin/data-CalonSantri') }}" method="GET" class="row mb-3">
                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Cari Nama / No Registrasi" value="{{ request('search') }}">
                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Cari</button>
                                <a href="{{ url('admin/data-CalonSantri') }}" class="btn btn-secondary"><i
                                        class="fas fa-sync"></i> Reset</a>
                            </div>
                        </form>

                        {{-- Tombol Ekspor ke XLS --}}
                        <a href="{{ route('santri.export', ['search' => request('search')]) }}" class="btn btn-success">
                            <i class="fas fa-file-excel"></i> Download XLS
                        </a>
                        {{-- Tombol Import XLS (Trigger Modal) --}}
                        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#importModal">
                            <i class="fas fa-file-upload"></i> Import XLS
                        </button>


                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Registrasi</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>No HP</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($santri as $s)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $s->no_pendaftaran }}</td>
                                                                    <td>{{ $s->nama_lengkap }}</td>
                                                                    <td>{{ $s->tempat_lahir }}</td>
                                                                    <td>{{ $s->tanggal_lahir }}</td>
                                                                    <td>
                                                                        {{ $s->orangTua->nomor_hp_orang_tua }}
                                                                        <a href="https://wa.me/{{ $s->orangTua->nomor_hp_orang_tua }}" target="_blank"
                                                                            class="text-success">

                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge 
                                                                                                            {{ $s->status_pendaftaran == 'Pending' ? 'bg-warning' :
                                        ($s->status_pendaftaran == 'Memverifikasi' ? 'bg-primary' :
                                            ($s->status_pendaftaran == 'Diterima' ? 'bg-success' : 'bg-danger')) }}">
                                                                            {{ $s->status_pendaftaran }}
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        {{-- Bukti Pendaftaran --}}
                                                                        <a href="{{ route('bukti.psb', $s->id) }}" target="_blank" class="badge bg-info"
                                                                            title="Lihat Bukti Pendaftaran">
                                                                            <i class="fas fa-file-alt"></i> Bukti
                                                                        </a>

                                                                        {{-- WhatsApp --}}
                                                                        <a href="https://wa.me/{{ preg_replace('/^0/', '+62', preg_replace('/^62/', '+62', $s->orangTua->nomor_hp_orang_tua)) }}"
                                                                            target="_blank" class="badge bg-success" title="Kirim WhatsApp">
                                                                            <i class="fab fa-whatsapp"></i> WA
                                                                        </a>



                                                                        {{-- Export Excel --}}
                                                                        <a href="{{ url('/export-excel') }}" class="badge bg-primary"
                                                                            title="Export ke Excel">
                                                                            <i class="fa-solid fa-file-excel"></i> Excel
                                                                        </a>

                                                                        {{-- Export PDF --}}
                                                                        <a href="{{ url('/export-pdf') }}" class="badge bg-danger"
                                                                            title="Export ke PDF">
                                                                            <i class="fa-solid fa-file-pdf"></i> PDF
                                                                        </a>
                                                                    </td>

                                                                </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-danger text-center">Tidak Ada Data Santri</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $santri->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Import XLS -->
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Import Data Santri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="file" class="form-label">Pilih File XLS</label>
                            <input type="file" name="file" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-file-upload"></i> Import Sekarang
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
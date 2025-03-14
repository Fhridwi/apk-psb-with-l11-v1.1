@extends('layouts.app')

@section('title','Pendaftar')

@section('content')

<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <a href="{{ route('pendaftar.create') }}" class="card-title btn btn-primary text-white">
                        Tambah Pendaftar
                    </a>
                    <div>
                        <a href="#" class="btn btn-success"><i class="fa-solid fa-file-excel"></i> Export Excel</a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i> Export PDF</a>
                    </div>
                </div>

                <div class="card-body">
                    {{-- Form Search dan Filter --}}
                    <form action="{{ route('pendaftar.index') }}" method="GET" class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="Cari Nama / No Registrasi" value="{{ request('search') }}">
                        </div>
                        <div class="col-md-3">
                            <select name="status" class="form-control">
                                <option value="">-- Filter Status --</option>
                                <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Memverifikasi" {{ request('status') == 'Memverifikasi' ? 'selected' : '' }}>Memverifikasi</option>
                                <option value="Diterima" {{ request('status') == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                <option value="Ditolak" {{ request('status') == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Cari</button>
                            <a href="{{ route('pendaftar.index') }}" class="btn btn-secondary"><i class="fas fa-sync"></i> Reset</a>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email Aktif</th>
                                    <th>Nomor Registrasi</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No HP</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($santri as $s)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $s->email }}</td>
                                    <td>{{ $s->no_pendaftaran }}</td>
                                    <td>{{ $s->nama_lengkap }}</td>
                                    <td>{{ $s->tempat_lahir }}</td>
                                    <td>{{ $s->tanggal_lahir }}</td>
                                    <td>{{ $s->orangTua->nomor_hp_orang_tua }}</td>
                                    <td>
                                        <span class="badge 
                                            {{ $s->status_pendaftaran == 'Pending' ? 'bg-warning' : 
                                               ($s->status_pendaftaran == 'Memverifikasi' ? 'bg-primary' : 
                                               ($s->status_pendaftaran == 'Diterima' ? 'bg-success' : 'bg-danger')) }}">
                                            {{ $s->status_pendaftaran }}
                                        </span>
                                    </td>
                                    <td class="d-flex gap-1">
                                        <a href="{{ route('pendaftar.show', $s->id) }}" class="badge bg-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        
                                        <a href="#" class="badge bg-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    
                                        <form action="{{ route('pendaftar.delete', $s->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus santri ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge bg-danger border-0">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-danger text-center">Tidak Ada Data Pendaftar</td>
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

@endsection

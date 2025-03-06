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
                <div class="card-content">
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
                                        {{-- <th>Email</th> --}}
                                    <th>Action</th>
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
                                    <td>{{ $s->orangTua->nomor_hp_orang_tua }}</td>
                                    {{-- <td>{{ $s->orangTua->email !== $s->orangTua->email ? 'Tidak Ada Info Email' : $s->orangTua->email }}</td> --}}
                                    <td>
                                        <a href="{{ route('pendaftar.show', $s->id) }}" class="badge bg-primary"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="badge bg-warning"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="badge bg-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <p class="text-danger text-center">Tidak Ada Data Pendaftar</p>
                                    
                                @endforelse
                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

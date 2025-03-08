@extends('layouts.app')

@section('title', 'Tahun Ajaran')

@section('content')
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('tahun.create') }}" class="card-title btn btn-primary text-white">
                            Tambah Tahun Ajaran
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TAHUN</th>
                                        <th>KUOTA</th>
                                        <th>Tanggal Selesai</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tahunAjaran as $tahun)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $tahun->tahun }}</td>
                                            <td>{{ $tahun->kuota }}</td>
                                            <td>{{ $tahun->tanggal_selesai }}</td>
                                            <td>
                                                <span class="badge {{ $tahun->status == 'dibuka' ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $tahun->status }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('tahun.edit', $tahun->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>

                                                <button class="btn btn-danger btn-sm btn-delete"
                                                    data-id="{{ $tahun->id }}">Hapus</button>

                                                <form id="delete-form-{{ $tahun->id }}"
                                                    action="{{ route('tahun.delete', $tahun->id) }}" 
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-danger">
                                                Tidak Ada Data Tahun Ajaran.
                                            </td>
                                        </tr>
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

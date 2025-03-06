@extends('layouts.app')

@section('title', 'Data Sekolah')
    
@section('content')
<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('sekolah.create') }}" class="card-title btn btn-primary text-white">
                        Tambah Tahun Ajaran
                    </a>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA SEKOLAH</th>
                                    <th>JENJANG</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sekolah as $s)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->sekolah }}</td>
                                        <td>{{ $s->jenjang }}</td>
                                        <td>
                                            <a href="{{ route('sekolah.edit', $s->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>

                                            <button class="btn btn-danger btn-sm btn-delete"
                                                data-id="{{ $s->id }}">Hapus</button>

                                            <form id="delete-form-{{ $s->id }}"
                                                action="{{ route('sekolah.delete', $s->id) }}" 
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
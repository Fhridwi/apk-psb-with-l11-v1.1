@extends('layouts.app')

@section('title', 'Tambah Data Program')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('program.store') }}" method="POST">
                                @csrf

                                <div class="form-body">
                                    <div class="row">
                                        <!-- Program Name -->
                                        <div class="col-md-4">
                                            <label for="program">Nama Program</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="program"
                                                class="form-control @error('program') is-invalid @enderror" name="program"
                                                placeholder="Contoh: Itensif Reguler "
                                                value="{{ old('program') }}" required>
                                            @error('program')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Tombol Submit & Reset -->
                                        <div class="col-12 col-md-8 offset-md-4 form-group">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                            <a href="{{ route('program.index') }}"
                                                class="btn btn-secondary me-1 mb-1">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
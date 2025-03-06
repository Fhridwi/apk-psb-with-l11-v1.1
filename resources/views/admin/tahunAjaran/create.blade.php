@extends('layouts.app')

@section('title', 'Tambah Tahun Ajaran')

@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('tahun.store') }}" method="POST">
                            @csrf
                            
                            <div class="form-body">
                                <div class="row">
                                    <!-- Tahun Ajaran -->
                                    <div class="col-md-4">
                                        <label for="tahun">Tahun Ajaran</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="tahun" class="form-control @error('tahun') is-invalid @enderror" 
                                            name="tahun" placeholder="Contoh: 2024/2025" value="{{ old('tahun') }}" required>
                                        @error('tahun')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Kuota -->
                                    <div class="col-md-4">
                                        <label for="kuota">Kuota</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="kuota" class="form-control @error('kuota') is-invalid @enderror" 
                                            name="kuota" placeholder="Jumlah Kuota" value="{{ old('kuota') }}" required>
                                        @error('kuota')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-4">
                                        <label for="status">Status</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
                                            <option value="dibuka" {{ old('status') == 'dibuka' ? 'selected' : '' }}>Dibuka</option>
                                            <option value="ditutup" {{ old('status') == 'ditutup' ? 'selected' : '' }}>Ditutup</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Tombol Submit & Reset -->
                                    <div class="col-12 col-md-8 offset-md-4 form-group">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                        <a href="{{ route('tahun.index') }}" class="btn btn-secondary me-1 mb-1">Batal</a>
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

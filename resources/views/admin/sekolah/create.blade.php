@extends('layouts.app')

@section('title', 'Tambah Data Sekolah')
    
@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('sekolah.store') }}" method="POST">
                            @csrf
                            
                            <div class="form-body">
                                <div class="row">
                                    <!-- Tahun Ajaran -->
                                    <div class="col-md-4">
                                        <label for="tahun">Nama Sekolah</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="sekolah" class="form-control @error('sekolah') is-invalid @enderror" 
                                            name="sekolah" placeholder="Contoh: SMK TI ANNAJIYAH" value="{{ old('sekolah') }}" required>
                                        @error('sekolah')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- jenjang -->
                                    <div class="col-md-4">
                                        <label for="jenjang">Jenjang Sekolah</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-control" name="jenjang">
                                            <option value="">-- Jenjang Sekolah --</option>
                                            <option value="SD">SD</option>
                                            <option value="SLTP">SLTP</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="UNIF/INST">UNIF/INST</option>
                                        </select>
                                        @error('jenjang')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

            
                                    <!-- Tombol Submit & Reset -->
                                    <div class="col-12 col-md-8 offset-md-4 form-group">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                        <a href="{{ route('sekolah.index') }}" class="btn btn-secondary me-1 mb-1">Batal</a>
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
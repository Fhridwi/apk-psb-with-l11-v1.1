@extends('layouts.app')

@section('title', 'Edit Data Sekolah')
    
@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('sekolah.update', $sekolah->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-body">
                                <div class="row">
                                    <!-- Nama Sekolah -->
                                    <div class="col-md-4">
                                        <label for="sekolah">Nama Sekolah</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="sekolah" class="form-control" name="sekolah" value="{{ $sekolah->sekolah }}" required>
                                    </div>

                                    <!-- jenjang -->
                                    <div class="col-md-4">
                                        <label for="jenjang">Jenjang Sekolah</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-control" name="jenjang">
                                            <option value="">-- Jenjang Sekolah --</option>
                                            <option value="SD" {{ $sekolah->jenjang == 'SD' ? 'selected' : '' }}>SD</option>
                                            <option value="SLTP" {{ $sekolah->jenjang == 'SLTP' ? 'selected' : '' }}>SLTP</option>
                                            <option value="SLTA" {{ $sekolah->jenjang == 'SLTA' ? 'selected' : '' }}>SLTA</option>
                                            <option value="UNIF/INST" {{ $sekolah->jenjang == 'UNIF/INST' ? 'selected' : '' }}>UNIF/INST</option>
                                        </select>
                                        @error('jenjang')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <!-- Tombol Submit & Reset -->
                                    <div class="col-12 col-md-8 offset-md-4 form-group">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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
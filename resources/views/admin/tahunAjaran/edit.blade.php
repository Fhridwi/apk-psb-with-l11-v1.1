@extends('layouts.app')
@section('title', 'Edit Tahun Ajaran')

@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Tahun Ajaran</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('tahun.update', $tahunAjaran->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-body">
                                <div class="row">
                                    <!-- Tahun Ajaran -->
                                    <div class="col-md-4">
                                        <label for="tahun">Tahun Ajaran</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="tahun" class="form-control" name="tahun" value="{{ $tahunAjaran->tahun }}" required>
                                    </div>

                                    <!-- Kuota -->
                                    <div class="col-md-4">
                                        <label for="kuota">Kuota</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="kuota" class="form-control" name="kuota" value="{{ $tahunAjaran->kuota }}" required>
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-4">
                                        <label for="status">Status</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="status" class="form-control" name="status" required>
                                            <option value="dibuka" {{ $tahunAjaran->status == 'dibuka' ? 'selected' : '' }}>Dibuka</option>
                                            <option value="ditutup" {{ $tahunAjaran->status == 'ditutup' ? 'selected' : '' }}>Ditutup</option>
                                        </select>
                                    </div>

                                    <!-- Tombol Submit & Reset -->
                                    <div class="col-12 col-md-8 offset-md-4 form-group">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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

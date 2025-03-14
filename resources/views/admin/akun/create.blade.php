@extends('layouts.app')

@section('title', 'Tambah Akun')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('akun.store') }}" method="POST">
                                @csrf

                                <div class="form-body">
                                    <div class="row">
                                        <!-- Nama -->
                                        <div class="col-md-4">
                                            <label for="name">Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-4">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                placeholder="Email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="col-md-4">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                placeholder="Password" required>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Konfirmasi Password -->
                                        <div class="col-md-4">
                                            <label for="password_confirmation">Konfirmasi Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password_confirmation"
                                                class="form-control" name="password_confirmation"
                                                placeholder="Ulangi Password" required>
                                        </div>

                                        <!-- Role -->
                                        <div class="col-md-4">
                                            <label for="role">Role</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select id="role" class="form-control @error('role') is-invalid @enderror"
                                                name="role" required>
                                                <option value="wali" {{ old('role') == 'wali' ? 'selected' : '' }}>Wali</option>
                                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="pengasuh" {{ old('role') == 'pengasuh' ? 'selected' : '' }}>Pengasuh</option>
                                            </select>
                                            @error('role')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Tombol Submit & Reset -->
                                        <div class="col-12 col-md-8 offset-md-4 form-group">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                            <a href="{{ route('akun.index') }}"
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

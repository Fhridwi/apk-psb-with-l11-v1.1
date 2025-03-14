@extends('layouts.app')

@section('title', 'Edit Akun')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('akun.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name">Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name" class="form-control" name="name"
                                                value="{{ old('name', $user->name) }}" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email" class="form-control" name="email"
                                                value="{{ old('email', $user->email) }}" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="password">Password (Opsional)</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="Kosongkan jika tidak ingin diubah">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="password_confirmation">Konfirmasi Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password_confirmation" class="form-control"
                                                name="password_confirmation" placeholder="Ulangi Password">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="role">Role</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select id="role" class="form-control" name="role" required>
                                                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="pengasuh" {{ old('role', $user->role) == 'pengasuh' ? 'selected' : '' }}>Pengasuh</option>
                                                <option value="wali" {{ old('role', $user->role) == 'wali' ? 'selected' : '' }}>Wali</option>
                                            </select>
                                        </div>

                                        <div class="col-12 col-md-8 offset-md-4 form-group">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ route('akun.index') }}" class="btn btn-secondary">Batal</a>
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
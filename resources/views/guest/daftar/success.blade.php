@extends('guest.layouts.app')

@section('content')

@if(session('success'))
    <div class="d-flex justify-content-center mt-10">
        <div class="card text-center shadow-lg p-4" style="width: 450px;">
            <div class="mb-3">
                <i class="fas fa-check-circle text-success" style="font-size: 80px;"></i>
            </div>
            <div class="card-body">
                <h3 class="card-title text-success fw-bold">Berhasil!</h3>
                <p class="card-text fs-5">{{ session('success') }}</p>
                <p class="text-muted">Terima kasih telah menggunakan layanan kami.</p>
                <div class="d-flex justify-content-center gap-3 mt-3">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('home') }}" class="btn btn-primary">Ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection

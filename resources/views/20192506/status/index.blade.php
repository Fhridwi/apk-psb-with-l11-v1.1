@extends('layouts.app')

@section('title', 'Status Pendaftaran')

@section('content')
<div class="container">
    <div class="row">
        @forelse($santri as $santri)
            <div class="col-md-4">
                <div class="card mb-3 shadow 
                    @if($santri->status_pendaftaran == 'Pending') border-warning
                    @elseif($santri->status_pendaftaran == 'Diverifikasi') border-primary
                    @elseif($santri->status_pendaftaran == 'Diterima') border-success
                    @else border-danger
                    @endif">
                    <div class="card-body">
                        <h5 class="card-title text-dark">{{ $santri->nama_lengkap }}</h5>
                        <p class="card-text">
                            <strong>No Pendaftaran:</strong> {{ $santri->no_pendaftaran }} <br>
                            <strong>Program :</strong> {{ $santri->programSekolah->program ?? '-' }} <br>
                            <strong>Sekolah:</strong> {{ $santri->programSekolah->sekolah ?? '-' }} <br>
                            <strong>Status:</strong> 
                            <span class="badge 
                                @if($santri->status_pendaftaran == 'Pending') bg-warning text-dark
                                @elseif($santri->status_pendaftaran == 'Diverifikasi') bg-primary
                                @elseif($santri->status_pendaftaran == 'Diterima') bg-success
                                @else bg-danger
                                @endif">
                                {{ $santri->status_pendaftaran }}
                            </span>
                        </p>
                        
                        @if($santri->status_pendaftaran == 'Diterima')
                            <a href="{{ route('bukti.psb', $santri->id) }}" target="_blank" class="btn btn-success btn-sm mx-auto">
                                <i class="fas fa-print"></i> Cetak Bukti
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <p class="text-danger">Belum ada data pendaftaran.</p>
        @endforelse
    </div>
</div>
@endsection

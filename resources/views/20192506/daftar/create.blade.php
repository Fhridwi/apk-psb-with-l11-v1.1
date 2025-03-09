@extends('layouts.app')


@section('content')

@php
    $akunId = auth()->id();
    $santriList = \App\Models\Santri::where('akun_id', $akunId)->get();
    $jumlahSantri = $santriList->count();
@endphp

@if ($jumlahSantri > 0)
<div class="container my-4">
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <div>
            <strong>Perhatian!</strong> Anda sudah terdaftar sebagai santri. Jika Anda memasukkan data lagi, maka Anda akan memiliki lebih dari 1 santri.
        </div>
    </div>

    <div class="text-center mt-3">
        <button id="tampilkanFormExisting" class="btn btn-warning btn-lg shadow">
            <i class="bi bi-pencil-square"></i> Saya Mengerti, Lanjutkan Pendaftaran
        </button>

        @if ($jumlahSantri == 1)
            <!-- Jika hanya 1 santri, langsung arahkan ke detailnya -->
            <a href="{{ route('daftar.show', $santriList->first()->id) }}" class="btn btn-primary btn-lg shadow">
                <i class="bi bi-eye"></i> Cek Data Santri
            </a>
        @else
            <!-- Jika lebih dari 1, tampilkan pilihan -->
            <div class="mt-3">
                <p><strong>Pilih Data Santri:</strong></p>
                @foreach ($santriList as $santri)
                    <a href="{{ route('daftar.show', $santri->id) }}" class="btn btn-outline-primary btn-sm shadow mb-2">
                        <i class="bi bi-eye"></i> {{ $santri->nama_lengkap }}
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</div>

<!-- Form hanya muncul jika tombol diklik -->
<div id="formPendaftaranExisting" style="display: none;" class="mt-3">
    @include('component.formPendaftaran')    
</div>

@else
<!-- Jika santri belum ada, form langsung ditampilkan -->
<div id="formPendaftaranNew">
    @include('component.formPendaftaran')
</div>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const hubunganWali = document.getElementById("hubungan_wali");
    const waliFields = document.querySelectorAll(".wali-fields");
    const tombolForm = document.getElementById("tampilkanFormExisting");
    const formPendaftaran = document.getElementById("formPendaftaranExisting");

    function toggleFields() {
        if (hubunganWali && waliFields.length > 0) {
            if (hubunganWali.value === "Ayah" || hubunganWali.value === "Ibu") {
                waliFields.forEach(field => field.style.display = "none");
            } else {
                waliFields.forEach(field => field.style.display = "block");
            }
        }
    }

    if (hubunganWali) {
        hubunganWali.addEventListener("change", toggleFields);
        toggleFields();
    }

    tombolForm?.addEventListener("click", function() {
        if (formPendaftaran.style.display === "block") {
            formPendaftaran.style.display = "none";
            tombolForm.innerHTML = '<i class="bi bi-pencil-square"></i> Saya Mengerti, Lanjutkan Pendaftaran'; 
        } else {
            formPendaftaran.style.display = "block";
            tombolForm.innerHTML = '<i class="bi bi-x-square"></i> Tutup Form';  
        }
    });
});

</script>

@endsection

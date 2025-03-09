@extends('layouts.app')

@section('title', 'Dashboard Wali Santri')

@section('content')
<div class="container">
    <div class="row">
        <!-- Selamat Datang -->
        <div class="col-12 mb-4">
            <div class="alert alert-primary">
                <h4 class="mb-0">Selamat Datang, Wali Santri!</h4>
                <p class="mb-0">Kelola pendaftaran santri dan pembayaran dengan mudah.</p>
            </div>
        </div>

        <!-- Statistik -->
        <div class="col-md-4">
            <div class="card shadow border-primary">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Santri</h5>
                    <h3 class="fw-bold text-primary">2</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-warning">
                <div class="card-body text-center">
                    <h5 class="card-title">Pendaftaran Diproses</h5>
                    <h3 class="fw-bold text-warning">1</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-success">
                <div class="card-body text-center">
                    <h5 class="card-title">Pendaftaran Diterima</h5>
                    <h3 class="fw-bold text-success">1</h3>
                </div>
            </div>
        </div>

        <!-- Daftar Santri -->
        <div class="col-12 mt-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Daftar Santri</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Santri</th>
                                <th>Status Pendaftaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmad Fauzi</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Muhammad Rizki</td>
                                <td><span class="badge bg-success">Diterima</span></td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm">
                                        <i class="fas fa-print"></i> Cetak Bukti
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Riwayat Pembayaran -->
        <div class="col-12 mt-4">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Riwayat Pembayaran</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Santri</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Muhammad Rizki</td>
                                <td>Rp 500.000</td>
                                <td><span class="badge bg-success">Lunas</span></td>
                                <td>10 Maret 2025</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ahmad Fauzi</td>
                                <td>Rp 500.000</td>
                                <td><span class="badge bg-warning text-dark">Menunggu Verifikasi</span></td>
                                <td>12 Maret 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

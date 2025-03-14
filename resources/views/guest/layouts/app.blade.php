<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Unicode -->
    <meta charset="UTF-8">
    <!-- IE Compatiblity -->
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <!-- First Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Description -->
    <meta name="description" content="">
    <!-- Page Keywords -->
    <meta name="keywords" content="">
    <!-- Site Author -->
    <meta name="author" content="zuhri">

    <!-- Title Of template -->
    <title>Pesantren Cemerlang Annajach Putra || Bahrul Ulum </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" style="height: 40px">

    <!-- Google fonts Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font Titillium Web  -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    <!-- Load CSS Files -->
    <link href="{{ asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/lib/icomoon/icomoon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    @include('guest.layouts.navbar')

    @yield('content')

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <!-- Kolom 1: Logo dan Deskripsi -->
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Pondok Pesantren XYZ</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Pesantren No. 123</p>
                        <p>Kabupaten ABC, Indonesia</p>
                        <p class="mt-3"><strong>Telepon:</strong> <span>+62 812-3456-7890</span></p>
                        <p><strong>Email:</strong> <span>info@pesantrenxyz.ac.id</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
    
                <!-- Kolom 2: Navigasi Cepat -->
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Menu Utama</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Profil</a></li>
                        <li><a href="#">Program Pendidikan</a></li>
                        <li><a href="#">PPDB</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
    
                <!-- Kolom 3: Layanan Pondok -->
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#">Pembayaran</a></li>
                        <li><a href="#">Perpustakaan</a></li>
                        <li><a href="#">Pelanggaran Santri</a></li>
                        <li><a href="#">Asrama & Kegiatan</a></li>
                        <li><a href="#">Laporan Keuangan</a></li>
                    </ul>
                </div>
    
                <!-- Kolom 4: Informasi Santri -->
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Informasi Santri</h4>
                    <ul>
                        <li><a href="#">Jadwal Kegiatan</a></li>
                        <li><a href="#">Agenda Harian</a></li>
                        <li><a href="#">Pengumuman</a></li>
                        <li><a href="#">Prestasi Santri</a></li>
                        <li><a href="#">Alumni</a></li> 
                    </ul>
                </div>
    
                <!-- Kolom 5: Bantuan -->
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Bantuan</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Donasi</a></li>
                        <li><a href="#">Peta Lokasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    
        <!-- Copyright -->
        <div class="container copyright text-center mt-4">
            <p>© 2025 <strong class="px-1 sitename">Pondok Pesantren Cemerlang Am-Najach</strong> | Semua Hak Cipta Dilindungi</p>
        </div>
    </footer>
    


    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
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
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Start Navigation -->
    <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a data-scroll href="#header" class="navbar-brand"><img src="{{ asset('assets/img/logo.png') }}"
                        class="img-circle" alt="Logo"></a>
            </div>

            <!-- Main Nav -->
            <div class="navbar-collapse collapse navbar-primary" role="navigation">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.html"><span class="fa fa-home" aria-hidden="true"></span> HOME</a>
                    </li>
                    <li><a href="artikel-psb.html"><span class="fa fa-file-text" aria-hidden="true"></span> ARTIKEL</a>
                    </li>
                    <li><a href="{{ route('pendaftaran.index') }}"><span class="fa fa-file-text" aria-hidden="true"></span> PSB</a></li>
                    <!-- Tambahan Menu -->
                    <li><a href="kontak.html"><span class="fa fa-envelope" aria-hidden="true"></span> KONTAK</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="login-btn"><a href="login.html" class="btn btn-primary btn-sm custom-btn"><span
                                class="fa fa-key" aria-hidden="true"></span> LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /End Navigation -->
    <!-- ini buat spasi antara navbar dan greeting section -->
    <div class="margin-bottom-100"></div>

    <!-- Start Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center hero-text">
                    <h1>Selamat Datang di Pondok Pesantren Kami</h1>
                    <p>Mencetak generasi berakhlak mulia dengan ilmu dan iman</p>
                    <a href="#about" class="btn btn-primary">Jelajahi</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Hero Section -->


    <!-- Start About Section -->
    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 about-img">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Tentang Kami" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12 about-text">
                    <h2 class="section-title">Tentang Pondok Pesantren Kami</h2>
                    <p>
                        Pondok Pesantren kami merupakan tempat belajar yang nyaman dengan bimbingan para asatidz
                        berpengalaman. Kami menyediakan pendidikan agama dan akademik yang seimbang untuk membentuk
                        generasi yang berakhlak mulia.
                    </p>
                    <p>
                        Dengan fasilitas lengkap dan lingkungan yang kondusif, kami berkomitmen mencetak santri
                        yang berilmu, beriman, dan bertakwa.
                    </p>
                    <a href="about.html" class="btn btn-primary">
                        <i class="fa fa-info-circle"></i> Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /End About Section -->


    <!-- Start Program Section -->
    <section class="program">
        <div class="container">
            <div class="section-title text-center">
                <h2>Program Pendidikan</h2>
                <p>Pilih program yang sesuai dengan minat dan kemampuanmu</p>
            </div>

            <div class="row">
                <!-- Hafalan Intensif -->
                <div class="col-lg-4 col-md-6">
                    <div class="card program-card">
                        <div class="card-body text-center">
                            <i class="fa fa-book-open program-icon"></i>
                            <h3>Hafalan Intensif</h3>
                            <p>Program hafalan Al-Qur'an dengan metode intensif.</p>
                        </div>
                    </div>
                </div>

                <!-- Hafalan Reguler -->
                <div class="col-lg-4 col-md-6">
                    <div class="card program-card">
                        <div class="card-body text-center">
                            <i class="fa fa-book program-icon"></i>
                            <h3>Hafalan Reguler</h3>
                            <p>Program hafalan dengan target capaian bertahap.</p>
                        </div>
                    </div>
                </div>

                <!-- Program Umum -->
                <div class="col-lg-4 col-md-6">
                    <div class="card program-card">
                        <div class="card-body text-center">
                            <i class="fa fa-flask program-icon"></i>
                            <h3>IPA</h3>
                            <p>Program Ilmu Pengetahuan Alam (IPA) untuk santri.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card program-card">
                        <div class="card-body text-center">
                            <i class="fa fa-university program-icon"></i>
                            <h3>IPS</h3>
                            <p>Ilmu Pengetahuan Sosial dengan materi terkini.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card program-card">
                        <div class="card-body text-center">
                            <i class="fa fa-calculator program-icon"></i>
                            <h3>Matematika</h3>
                            <p>Program pemahaman konsep dan latihan soal.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card program-card">
                        <div class="card-body text-center">
                            <i class="fa fa-language program-icon"></i>
                            <h3>Bahasa Arab</h3>
                            <p>Belajar Bahasa Arab untuk pemahaman kitab.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card program-card">
                        <div class="card-body text-center">
                            <i class="fa fa-book program-icon"></i>
                            <h3>Bahasa Indonesia</h3>
                            <p>Peningkatan keterampilan berbahasa Indonesia.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card program-card">
                        <div class="card-body text-center">
                            <i class="fa fa-globe program-icon"></i>
                            <h3>Bahasa Inggris</h3>
                            <p>Program intensif belajar bahasa Inggris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Program Section -->

    <!-- Start Fasilitas Section -->
    <section class="fasilitas">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="font-bold">Fasilitas</h2>
                <p>Fasilitas lengkap untuk menunjang kegiatan santri</p>
            </div>

            <div class="row">
                <!-- Masjid -->
                <div class="col-lg-4 col-md-6">
                    <div class="fasilitas-card">
                        <img src="{{ asset('assets/img/fasilitas/il-photo-01.png') }}" alt="Masjid">
                        <div class="overlay">
                            <h3>Masjid</h3>
                            <p>Tempat ibadah yang nyaman untuk santri.</p>
                        </div>
                    </div>
                </div>

                <!-- Perpustakaan -->
                <div class="col-lg-4 col-md-6">
                    <div class="fasilitas-card">
                        <img src="{{ asset('assets/img/fasilitas/il-photo-02.png') }}" alt="Perpustakaan">
                        <div class="overlay">
                            <h3>Perpustakaan</h3>
                            <p>Koleksi buku lengkap untuk menambah wawasan santri.</p>
                        </div>
                    </div>
                </div>

                <!-- Asrama -->
                <div class="col-lg-4 col-md-6">
                    <div class="fasilitas-card">
                        <img src="{{ asset('assets/img/fasilitas/il-photo-03.png') }}" alt="Asrama">
                        <div class="overlay">
                            <h3>Asrama</h3>
                            <p>Asrama nyaman untuk tempat tinggal para santri.</p>
                        </div>
                    </div>
                </div>

                <!-- Lapangan -->
                <div class="col-lg-4 col-md-6">
                    <div class="fasilitas-card">
                        <img src="{{ asset('assets/img/fasilitas/il-photo-04.png') }}" alt="Lapangan">
                        <div class="overlay">
                            <h3>Lapangan</h3>
                            <p>Lapangan luas untuk kegiatan olahraga santri.</p>
                        </div>
                    </div>
                </div>

                <!-- Laboratorium Komputer -->
                <div class="col-lg-4 col-md-6">
                    <div class="fasilitas-card">
                        <img src="{{ asset('assets/img/fasilitas/il-photo-01.png') }}" alt="Laboratorium Komputer">
                        <div class="overlay">
                            <h3>Laboratorium Komputer</h3>
                            <p>Fasilitas belajar berbasis teknologi untuk santri.</p>
                        </div>
                    </div>
                </div>

                <!-- Kantin -->
                <div class="col-lg-4 col-md-6">
                    <div class="fasilitas-card">
                        <img src="{{ asset('assets/img/fasilitas/il-photo-02.png') }}" alt="Kantin">
                        <div class="overlay">
                            <h3>Kantin</h3>
                            <p>Menyediakan makanan sehat dan bergizi untuk santri.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Fasilitas Section -->

    <!-- Start Parallax Section -->
    <section class="parallax-section">
        <div class="parallax-overlay"></div>
        <div class="container text-center">
            <h2>Menjadi Generasi Islami yang Berilmu dan Berakhlak</h2>
            <p>Bergabunglah dengan kami untuk membangun masa depan yang lebih cerah.</p>
            <a href="psb.html" class="btn btn-primary">Daftar Sekarang</a>
        </div>
    </section>
    <!-- /End Parallax Section -->

    <!-- Artikel Terbaru Section -->
    <section class="artikel">
        <div class="container">
            <h2 class="section-title text-center">Artikel Terbaru</h2>
            <p class="text-center">Temukan informasi terbaru seputar kegiatan dan pendidikan di pesantren kami.</p>
            <div class="row">
                <!-- Artikel 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="artikel-card">
                        <img src="assets/img/fasilitas/il-photo-01.png" alt="Artikel 1" class="img-fluid">
                        <div class="artikel-content">
                            <h3>Kegiatan Tahfizh Santri</h3>
                            <p class="artikel-date">12 Oktober 2023</p>
                            <p class="artikel-desc">Kegiatan tahfizh Al-Qur'an menjadi salah satu program unggulan di
                                pesantren kami. Simak cerita lengkapnya di sini.</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Artikel 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="artikel-card">
                        <img src="assets/img/fasilitas/il-photo-02.png" alt="Artikel 2" class="img-fluid">
                        <div class="artikel-content">
                            <h3>Penerimaan Santri Baru</h3>
                            <p class="artikel-date">10 Oktober 2023</p>
                            <p class="artikel-desc">Pendaftaran santri baru tahun ajaran 2024/2025 sudah dibuka.
                                Daftarkan diri Anda sekarang!</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Artikel 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="artikel-card">
                        <img src="assets/img/fasilitas/il-photo-02.png" alt="Artikel 3" class="img-fluid">
                        <div class="artikel-content">
                            <h3>Kegiatan Sosial Santri</h3>
                            <p class="artikel-date">8 Oktober 2023</p>
                            <p class="artikel-desc">Santri-santri kami aktif dalam kegiatan sosial masyarakat. Simak
                                liputannya di sini.</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPDB ONLINE || Pendaftaran Santri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<style>
.navbar-white {
    background-color: rgba(255, 255, 255, 1); 
}

    .bg-section {
    background-image: url('assets/background.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh;
}

.bg-opacity {
    background-color: rgba(255, 255, 255, 0.7);
    position: relative;
    z-index: 10;
}
</style>

<body class="bg-gray-100" data-aos-easing="ease-in-out" data-aos-duration="600">

    <header class="shadow fixed -top-1 left-0 w-full z-50 bg-white">
        <nav class="container mx-auto flex items-center justify-between py-4 px-4">
            <!-- Logo -->
            <a class="block md:hidden" href="#">
                <img src="{{ asset('assets/logo-j.png') }}" alt="logo" class="w-36 ml-4">
            </a>
            <a class="hidden md:block" href="#">
                <img src="{{ asset('assets/logo-j.png') }}" alt="logo" class="w-64">
            </a>
    
            <!-- Menu Desktop -->
            <div class="hidden lg:flex space-x-6 font-bold text-[14px]">
                <a class="nav-link" href=""><i class="fas fa-home"></i> Home</a>
                <a class="nav-link" href=""><i class="fas fa-user"></i> About</a>
                <a class="nav-link" href=""><i class="fas fa-book"></i> Program</a>
                <a class="nav-link" href=""><i class="fas fa-route"></i> Alur</a>
                <a class="nav-link" href=""><i class="fas fa-images"></i> Galery</a>
                <a class="nav-link" href=""><i class="fas fa-phone"></i> Contact</a>
            </div>
    
            <!-- Button Daftar -->
            <a href="{{ route('daftar') }}" class="hidden lg:block px-4 py-2 text-white bg-green-600 hover:bg-green-700 rounded-lg transition">Daftar</a>
    
            <!-- Button Mobile Menu -->
            <div class="lg:hidden relative">
                <button class="block focus:outline-none mr-5" id="menu-btn" aria-label="Toggle Menu">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </nav>
    
        <!-- Popup Mobile Menu -->
        <div id="mobile-menu" class="fixed inset-0 bg-white bg-opacity-90 flex flex-col items-center justify-center space-y-6 hidden z-50">
            <button id="close-menu" class="absolute top-5 right-5 text-3xl text-gray-700"><i class="fas fa-times"></i></button>
            <a class="popup-link" href=""><i class="fas fa-home"></i> Home</a>
            <a class="popup-link" href=""><i class="fas fa-user"></i> About</a>
            <a class="popup-link" href=""><i class="fas fa-book"></i> Program</a>
            <a class="popup-link" href=""><i class="fas fa-route"></i> Alur</a>
            <a class="popup-link" href="g"><i class="fas fa-images"></i> Galery</a>
            <a class="popup-link" href="{{ route('daftar') }}"><i class="fas fa-edit"></i> Daftar</a>
            <a class="popup-link" href=""><i class="fas fa-phone"></i> Contact</a>
        </div>
    </header>

<section class="bg-section">
    <div class="bg-opacity px-4 mx-auto flex flex-col items-center lg:gap-8 xl:gap-0 lg:py-16 lg:flex-row lg:justify-between min-h-screen">
        <!-- Left Column: Text Content -->
        <div class="lg:flex lg:flex-col lg:col-span-7 lg:mb-1 text-center lg:text-left lg:pl-0 lg:pr-0 lg:mx-20" data-aos="fade-right">
            <img src="assets/logo.png" alt="Logo Pesantren" class="w-20 lg:w-28 mb-4 mx-auto lg:mx-0 mt-20  sm:mt-28 ">
            <h1 class="text-2xl lg:text-4xl font-semibold text-gray-900 sm:text-3xl">Pondok Pesantren</h1>
            <h2 class="text-2xl font-bold lg:text-5xl sm:4xl">Cemerlang An-Najach Putra</h2>
            <p class="text-xl italic sm:text-md mb-4 md:text-sm lg:text-lg lg:mt-2">Bahrul Ulum Tambakberas, Jombang</p>
            <h2 class="text-md font-semibold mb-4">Pendaftaran Santri Baru An-Najach 2025 - 2026</h2>
            <div class="flex flex-col sm:flex-row gap-2 mt-4 justify-center lg:justify-start">
                <a href="{{ route('daftar') }}" class="px-3 py-3 text-white bg-green-600 hover:bg-green-700 rounded-lg transition w-full sm:w-auto text-center lg:px-10 sm:px-9">Daftar</a>
                <a href="#" class="px-3 py-3 text-white bg-green-600 hover:bg-green-700 rounded-lg transition w-full sm:w-auto text-center lg:px-9 sm:px-9">Panduan</a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 fade-in visible" style="background: linear-gradient(to right, #4caf50, #81c784);" >
    <div class="container mx-auto text-center px-7" data-aos="zoom-in">
        <h2 class="text-xl font-bold text-white mb-8">Download Brosur dan Rincian Pembayaran</h2>
        <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
            <a href="#" id="downloadBtn1" class="bg-white text-green-600 rounded-lg shadow-lg p-4 flex items-center justify-center transition hover:bg-green-100">
                <i class="fas fa-file-download mr-2"></i>
                Download Brosur
            </a>
            <a href="#" id="downloadBtn2" class="bg-white text-green-600 rounded-lg shadow-lg p-4 flex items-center justify-center transition hover:bg-green-100">
                <i class="fas fa-file-download mr-2 "></i>
                Rincian Pendaftaran
            </a>
        </div>
    </div>
</section>

<section class="max-w-6xl mx-auto py-12 px-6">
    <!-- Judul & Deskripsi -->
    <div class="text-center mb-10">
        <h2 class="text-2xl font-bold text-gray-800">About Me</h2>
        <p class="text-gray-600 mt-2">Saya adalah seorang profesional di bidang teknologi dengan pengalaman bertahun-tahun.</p>
    </div>

    <!-- Konten 2 Kolom -->
    <div class="grid md:grid-cols-2 gap-8 items-center">
        <!-- Kiri: Gambar & Teks -->
        <div>
            <h3 class="text-xl font-semibold text-gray-800">Perjalanan & Pengalaman Saya</h3>
            <p class="text-gray-600 mt-3">
                Saya telah bekerja di berbagai proyek yang berkaitan dengan pengembangan web, aplikasi mobile, dan sistem berbasis cloud.
            </p>
            <img src="assets/background.jpg" alt="Work Image" class="rounded-lg shadow-md mt-4">
        </div>

        <!-- Kanan: List & Video -->
        <div>
            <ul class="space-y-2 text-gray-700">
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✔</span> Membangun sistem web dengan teknologi modern.
                </li>
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✔</span> Mengembangkan aplikasi mobile berbasis iOS & Android.
                </li>
                <li class="flex items-start">
                    <span class="text-green-500 mr-2">✔</span> Mengoptimalkan pengalaman pengguna dengan UI/UX terbaik.
                </li>
            </ul>
            <!-- Video -->
            <div class="relative mt-6">
                <img src="{{ asset('assets/bg-daftar.jpg') }}" alt="Video Thumbnail" class="rounded-lg shadow-md">
                <button class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg">
                    <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6.5 4.5v11l8-5.5-8-5.5z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>



<!-- Program Kami -->
<section class="py-12 bg-gray-100 overflow-hidden">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center mb-6">Program Kami</h2>

        <!-- Wrapper Scroll -->
        <div class="relative w-full overflow-x-hidden">
            <div class="scroll-track flex gap-5">
                <!-- Hafalan Intensif -->
                <div class="program-card">
                    <i class="fas fa-book-quran text-green-500 text-4xl mb-3"></i>
                    <h3 class="font-semibold text-lg">Hafalan Intensif</h3>
                    <p class="text-gray-600 text-sm">Percepatan hafalan Al-Qur'an.</p>
                </div>

                <!-- Hafalan Reguler -->
                <div class="program-card">
                    <i class="fas fa-book text-blue-500 text-4xl mb-3"></i>
                    <h3 class="font-semibold text-lg">Hafalan Reguler</h3>
                    <p class="text-gray-600 text-sm">Hafalan Al-Qur'an bertahap.</p>
                </div>

                <!-- Ekstrakurikuler -->
                <div class="program-card">
                    <i class="fas fa-futbol text-red-500 text-4xl mb-3"></i>
                    <h3 class="font-semibold text-lg">Ekstrakurikuler</h3>
                    <p class="text-gray-600 text-sm">Olahraga, seni, dll.</p>
                </div>

                <!-- Program IPA -->
                <div class="program-card">
                    <i class="fas fa-atom text-purple-500 text-4xl mb-3"></i>
                    <h3 class="font-semibold text-lg">Program IPA</h3>
                    <p class="text-gray-600 text-sm">Biologi, Fisika, Kimia.</p>
                </div>

                <!-- Program IPS -->
                <div class="program-card">
                    <i class="fas fa-globe text-yellow-500 text-4xl mb-3"></i>
                    <h3 class="font-semibold text-lg">Program IPS</h3>
                    <p class="text-gray-600 text-sm">Sejarah, Geografi, Ekonomi.</p>
                </div>

                <!-- Program IT -->
                <div class="program-card">
                    <i class="fas fa-laptop-code text-indigo-500 text-4xl mb-3"></i>
                    <h3 class="font-semibold text-lg">Program IT</h3>
                    <p class="text-gray-600 text-sm">Pemrograman, Jaringan, Desain.</p>
                </div>

                <!-- Bahasa Inggris -->
                <div class="program-card">
                    <i class="fas fa-language text-blue-400 text-4xl mb-3"></i>
                    <h3 class="font-semibold text-lg">Bahasa Inggris</h3>
                    <p class="text-gray-600 text-sm">Komunikasi global.</p>
                </div>

                <!-- Bahasa Arab -->
                <div class="program-card">
                    <i class="fas fa-book-open text-green-400 text-4xl mb-3"></i>
                    <h3 class="font-semibold text-lg">Bahasa Arab</h3>
                    <p class="text-gray-600 text-sm">Membaca dan berbicara Arab.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-12 p-2" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <h2 class="text-xl font-bold text-center mb-8">Alur Pendaftaran Santri Baru</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 text-center">

            <!-- Step 1 -->
            <div class="flex flex-col items-center" data-aos="fade-up">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    1
                </div>
                <h3 class="text-xl font-semibold mb-2">Isi Form Pendaftaran</h3>
                <p>Calon santri mengisi seluruh form pendaftaran online dengan lengkap, termasuk data pribadi dan informasi pendidikan.</p>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    2
                </div>
                <h3 class="text-xl font-semibold mb-2"> Tunggu Admin mengkonfirmasi Pendaftaran </h3>
                <p>Setelah admin mengkonfirmasi, maka anda akan mendapatkan file pdf yang akan dikirimkan ke email anda. </p>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    3
                </div>
                <h3 class="text-xl font-semibold mb-2">Konfirmasi Pembayaran</h3>
                <p>Lakukan konfirmasi pembayaran melalui transfer bank atau datang langsung ke pondok dengan membawa bukti pendaftaran.</p>
            </div>

            <!-- Step 4 -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    4
                </div>
                <h3 class="text-xl font-semibold mb-2">Pelunasan Pembayaran</h3>
                <p>Pelunasan biaya harus dilakukan sesuai jadwal yang ditentukan, baik melalui transfer bank atau di pondok.</p>
            </div>

            <!-- Step 5 -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    5
                </div>
                <h3 class="text-xl font-semibold mb-2">Pertemuan Wali dan Penyerahan Santri</h3>
                <p>Wali santri menghadiri pertemuan di pondok dan santri secara resmi diserahkan untuk memulai pendidikan.</p>
            </div>

        </div>
    </div>
</section>

<!-- Section Gallery -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-xl font-bold text-center mb-8">Galeri Kegiatan</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Gambar 1 -->
            <div class="gallery-item">
                <img src="assets/background.jpg" alt="Kegiatan 1" class="gallery-img">
            </div>
            
            <!-- Gambar 2 -->
            <div class="gallery-item">
                <img src="assets/background.jpg" alt="Kegiatan 2" class="gallery-img">
            </div>
            
            <!-- Gambar 3 -->
            <div class="gallery-item">
                <img src="assets/background.jpg" alt="Kegiatan 3" class="gallery-img">
            </div>
            
            <!-- Gambar 4 -->
            <div class="gallery-item">
                <img src="assets/background.jpg" alt="Kegiatan 4" class="gallery-img">
            </div>
        </div>
    </div>
</section>

<!-- Section untuk WhatsApp -->
<section class="bg-green-600 py-8 p-3" >
    <div class="container mx-auto text-center " >
        <h2 class="text-2xl font-bold text-white mb-4">Butuh Bantuan Lebih Lanjut?</h2>
        <p class="text-white mb-4">Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami melalui WhatsApp.</p>
        <a href="https://wa.me/6285792336956" target="_blank" class="bg-white text-green-600 rounded-lg px-6 py-3 text-lg font-semibold transition duration-300 hover:bg-green-100">
            Hubungi Kami di WhatsApp
        </a>
    </div>
</section>

<section class="bg-gray-100 py-12 p-5">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">FAQ Pendaftaran Santri Baru</h2>

        <!-- FAQ Container -->
        <div class="space-y-4">

            <!-- FAQ 1 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(1)">
                    1. Apa saja syarat pendaftaran?
                </button>
                <div id="faq-1" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Syarat pendaftaran meliputi fotokopi akta kelahiran, fotokopi kartu keluarga, dan fotokopi ktp Orang Tua.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(2)">
                    2. Bagaimana cara melakukan pembayaran?
                </button>
                <div id="faq-2" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Pembayaran dapat dilakukan melalui transfer bank ke rekening yang ditentukan atau datang langsung ke pondok.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(3)">
                    3. Apakah ada batas waktu pendaftaran?
                </button>
                <div id="faq-3" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Pendaftaran dibuka dari Januari hingga Maret setiap tahunnya. Harap segera mendaftar sebelum kuota penuh.</p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(4)">
                    4. Bagaimana cara mengkonfirmasi pembayaran?
                </button>
                <div id="faq-4" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Setelah pembayaran, kirimkan bukti pembayaran ke admin melalui WhatsApp atau datang langsung ke pondok untuk konfirmasi.</p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(5)">
                    5. Kapan waktu pertemuan wali santri?
                </button>
                <div id="faq-5" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Pertemuan wali santri diadakan sebelum santri resmi masuk ke pondok, detail waktu akan diberitahukan lebih lanjut.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<footer class="bg-green-800 text-white py-6 px-5">
    <div class="container mx-auto flex flex-col md:flex-row md:justify-between items-center">
        <!-- Left Column: School Information -->
        <div class="text-center md:text-left mb-4 md:mb-0">
            <img src="assets/logo.png" alt="Logo" class="h-16 mx-auto md:mx-0 mb-2">
            <p class="mb-2">&copy; 2024 PCN Boarding School. All Rights Reserved.</p>
            <p class="text-sm">Alamat: Jl. kH Wahab Hasbulloh Gg III Tambakberas, Jombang</p>
            <p class="text-sm">Telepon:+62 878-5956-3918</p>
            <p class="text-sm">Email: psbpcn@gmail.com</p>
        </div>

        <!-- Google Maps Embed -->
        <div class="mt-4 md:mt-0">
            <span class="font-semibold">Temukan kami di sini:</span>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63287.087422669225!2d112.2272129!3d-7.5265679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783f0018e17bc1%3A0x5145e8c894daea7b!2sRibath%20Cemerlang%20An%20Najach%20Putra%20Bahrul%20Ulum!5e0!3m2!1sid!2sid!4v1730356439589!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Social Media Links -->
    <div class="flex justify-center space-x-4 mt-4">
        <a href="https://www.facebook.com" class="text-white hover:text-green-400" target="_blank" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.twitter.com" class="text-white hover:text-green-400" target="_blank" aria-label="Twitter">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com" class="text-white hover:text-green-400" target="_blank" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="main.js"></script>

<script>
      document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');

        
        function handleNavbarBackground() {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-white'); 
            } else {
                navbar.classList.remove('navbar-white'); 
            }
        }

        handleNavbarBackground();

        window.addEventListener('scroll', handleNavbarBackground);
    });

    document.getElementById('downloadBtn1').addEventListener('click', function () {
            const fileUrl = 'assets/brosurRincian/BROSUR.pdf'; 
            const fileName = 'Brosur Pondok.pdf'; 

            const link = document.createElement('a');
            link.href = fileUrl;
            link.download = fileName;

            document.body.appendChild(link);
            link.click();

            document.body.removeChild(link);
        });

    document.getElementById('downloadBtn2').addEventListener('click', function () {
            const fileUrl = 'assets/brosurRincian/RINCIAN PEMBAYARAN.pdf'; 
            const fileName = 'Rincian Pembayaran.pdf'; 

            const link = document.createElement('a');
            link.href = fileUrl;
            link.download = fileName;

            document.body.appendChild(link);
            link.click();

            document.body.removeChild(link);
        });
</script>

</body>
</html>

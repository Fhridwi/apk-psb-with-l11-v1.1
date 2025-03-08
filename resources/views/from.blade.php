<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPDB ONLINE || Pendaftaran Santri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-100">

    <header class="shadow fixed -top-1 left-0 w-full z-50 bg-white">
        <nav class="container mx-auto flex items-center justify-between py-4 px-4">
            <!-- Logo -->
            <a class="block md:hidden" href="#">
                <img src="assets/logo-j.png" alt="logo" class="w-36 ml-4">
            </a>
            <a class="hidden md:block" href="#">
                <img src="assets/logo-j.png" alt="logo" class="w-64">
            </a>

            <!-- Menu Desktop -->
            <div class="hidden lg:flex space-x-6 font-bold text-[14px]">
                <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                <a class="nav-link" href=""><i class="fas fa-user"></i> About</a>
                <a class="nav-link" href=""><i class="fas fa-book"></i> Program</a>
                <a class="nav-link" href=""><i class="fas fa-route"></i> Alur</a>
                <a class="nav-link" href=""><i class="fas fa-images"></i> Galery</a>
                <a class="nav-link" href=""><i class="fas fa-phone"></i> Contact</a>
            </div>

            <!-- Button Daftar -->
            <a href="{{ route('daftar') }}"
                class="hidden lg:block px-4 py-2 text-white bg-green-600 hover:bg-green-700 rounded-lg transition">Daftar</a>

            <!-- Button Mobile Menu -->
            <div class="lg:hidden relative">
                <button class="block focus:outline-none mr-5" id="menu-btn" aria-label="Toggle Menu">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </nav>

        <!-- Popup Mobile Menu -->
        <div id="mobile-menu"
            class="fixed inset-0 bg-white bg-opacity-90  flex-col items-center justify-center space-y-6 hidden z-50">
            <button id="close-menu" class="absolute top-5 right-5 text-3xl text-gray-700"><i
                    class="fas fa-times"></i></button>
            <a class="popup-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
            <a class="popup-link" href=""><i class="fas fa-user"></i> About</a>
            <a class="popup-link" href=""><i class="fas fa-book"></i> Program</a>
            <a class="popup-link" href=""><i class="fas fa-route"></i> Alur</a>
            <a class="popup-link" href=""><i class="fas fa-images"></i> Galery</a>
            <a class="popup-link" href="{{ route('daftar') }}"><i class="fas fa-edit"></i> Daftar</a>
            <a class="popup-link" href=""><i class="fas fa-phone"></i> Contact</a>
        </div>
    </header>

    <main class="mt-16">
        <section class="container mx-auto px-4 py-8">
            <h2 class="text-2xl font-bold mb-6">Form Pendaftaran Santri</h2>

            <!-- Data Santri -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <div class="flex items-center mb-4">
                    <i class="fas fa-user text-2xl text-green-600 mr-3"></i>
                    <h3 class="text-xl font-semibold">Data Santri</h3>
                </div>

                <form action="{{ route('submit.store') }}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <label class="mb-2">No Pendaftaran</label>
                            <input type="text" class="border p-2 rounded-lg" name="no_pendaftaran"
                                value="{{ $no_pendaftaran }}" readonly>
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Nama Lengkap</label>
                            <input type="text" class="border p-2 rounded-lg" name="nama_lengkap"
                                placeholder="Masukkan nama lengkap" required>
                                @error('nama_lengkap')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="tempat_lahir" class="mb-2">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"
                                class="border p-2 rounded-lg" required>
                                @error('tempat_lahir')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Tanggal Lahir</label>
                            <input type="date" class="border p-2 rounded-lg" name="tanggal_lahir" required>
                            @error('tanggal_lahir')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Jenis Kelamin</label>
                            <select class="border p-2 rounded-lg" name="jenis_kelamin" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="anak_ke" class="mb-2">Anak Ke</label>
                            <input type="text" name="anak_ke" id="anak_ke" class="border p-2 rounded-lg"
                                placeholder="Anak Ke" required>
                                @error('anak_ke')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="asal_sekolah" class="mb-2">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah"
                                class="border p-2 rounded-lg" required>
                                @error('asal_sekolah')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Alamat</label>
                            <input type="text" class="border p-2 rounded-lg" placeholder="Masukkan alamat"
                                name="alamat" required>
                                @error('alamat')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            </div>


            <!-- Program dan Sekolah -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <div class="flex items-center mb-4">
                    <i class="fas fa-school text-2xl text-green-600 mr-3"></i>
                    <h3 class="text-xl font-semibold">Program dan Sekolah</h3>
                </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <label class="mb-2">Pilih Program</label>
                            <select class="border p-2 rounded-lg" name="program" required>
                                <option value=""> -- Pilih Program -- </option>
                                @foreach ($program as $p)
                                    <option value="{{ $p->program }}">{{ $p->program }}</option>
                                @endforeach
                            </select>
                            @error('program')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Pilih Sekolah</label>
                            <select class="border p-2 rounded-lg" name="sekolah" required>
                                <option value="">-- Pilih Sekolah --</option>
                                @foreach ($sekolah as $s)
                                    <option value="{{ $s->sekolah }}">{{ $s->sekolah }}</option>
                                @endforeach
                            </select>
                            @error('sekolah')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Pilih Tahun Ajaran</label>
                            <select class="border p-2 rounded-lg" name="tahun_ajaran" required>
                                <option value="">-- Pilih Tahun Ajaran --</option>
                                @foreach ($tahunAjaran as $t)
                                    <option value="{{ $t->id }}">{{ $t->tahun }}</option>
                                @endforeach
                            </select>
                            @error('tahun_ajaran')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
            </div>


            <!-- Data Orang Tua -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <div class="flex items-center mb-4">
                    <i class="fas fa-users text-2xl text-green-600 mr-3"></i>
                    <h3 class="text-xl font-semibold">Data Orang Tua</h3>
                </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <label class="mb-2">Nama Ayah</label>
                            <input type="text" class="border p-2 rounded-lg" name="nama_ayah"
                                placeholder="Masukkan nama ayah" required> 
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Nama Ibu</label>
                            <input type="text" class="border p-2 rounded-lg" name="nama_ibu"
                                placeholder="Masukkan nama ibu" required>
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Pekerjaan Ayah</label>
                            <input type="text" class="border p-2 rounded-lg" name="pekerjaan_ayah"
                                placeholder="Masukkan pekerjaan ayah" required>
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Pekerjaan Ibu</label>
                            <input type="text" class="border p-2 rounded-lg" name="pekerjaan_ibu"
                                placeholder="Masukkan pekerjaan ibu" required>
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Penghasilan Ayah</label>
                            <select class="border p-2 rounded-lg" name="penghasilan_ayah" required>
                                <option value="">-- Pilih Penghasilan Ayah --</option>
                                <option value="0">Tidak Bekerja</option>
                                <option value="1000000">Rp.1.000.000 - Rp.2.000.000</option>
                                <option value="2000000">Rp.2.000.000 - Rp.3.000.000</option>
                                <option value="3000000">Rp.3.000.000 - Rp.5.000.000</option>
                                <option value="5000000">Rp.5.000.000 - Rp.10.000.000</option>
                                <option value="10000000">Lebih dari Rp.10.000.000</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Penghasilan Ibu</label>
                            <select class="border p-2 rounded-lg" name="penghasilan_ibu" required>
                                <option value="">-- Pilih Penghasilan Ibu --</option>
                                <option value="0">Tidak Bekerja</option>
                                <option value="1000000">Rp.1.000.000 - Rp.2.000.000</option>
                                <option value="2000000">Rp.2.000.000 - Rp.3.000.000</option>
                                <option value="3000000">Rp.3.000.000 - Rp.5.000.000</option>
                                <option value="5000000">Rp.5.000.000 - Rp.10.000.000</option>
                                <option value="10000000">Lebih dari Rp.10.000.000</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Status Ayah</label>
                            <select class="border p-2 rounded-lg" name="status_ayah" required>
                                <option value="">-- Pilih Status Ayah --</option>
                                <option value="hidup">Hidup</option>
                                <option value="meninggal">Meninggal</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Status Ibu</label>
                            <select class="border p-2 rounded-lg" name="status_ibu" required>
                                <option value="">-- Pilih Status Ibu --</option>
                                <option value="hidup">Hidup</option>
                                <option value="meninggal">Meninggal</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">Alamat Orang Tua</label>
                            <textarea class="border p-2 rounded-lg" name="alamat_orang_tua" rows="2"
                                placeholder="Alamat Orang Tua" required></textarea>
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-2">No HP Orang Tua</label>
                            <input type="number" class="border p-2 rounded-lg" name="nomor_hp_orang_tua"
                                placeholder="Masukkan nomor HP" required>
                        </div>
                    </div>
            </div>



            <!-- Wali Santri (Opsional) -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <div class="flex items-center mb-4">
                    <i class="fas fa-user-friends text-2xl text-green-600 mr-3"></i>
                    <h3 class="text-xl font-semibold">Wali Santri (Opsional)</h3>
                </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Nama Wali -->
                        <div class="flex flex-col">
                            <label class="mb-2">Nama Wali</label>
                            <input type="text" name="nama_wali" class="border p-2 rounded-lg"
                                placeholder="Masukkan nama wali" value="{{ old('nama_wali') }}">
                            @error('nama_wali')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Hubungan Wali -->
                        <div class="flex flex-col">
                            <label class="mb-2">Hubungan dengan Santri</label>
                            <select name="hubungan_wali" class="border p-2 rounded-lg">
                                <option value="">-- Pilih Hubungan --</option>
                                <option value="Ayah" {{ old('hubungan_wali') == 'Ayah' ? 'selected' : '' }}>Ayah</option>
                                <option value="Ibu" {{ old('hubungan_wali') == 'Ibu' ? 'selected' : '' }}>Ibu</option>
                                <option value="Kakak" {{ old('hubungan_wali') == 'Kakak' ? 'selected' : '' }}>Kakak
                                </option>
                                <option value="Paman" {{ old('hubungan_wali') == 'Paman' ? 'selected' : '' }}>Paman
                                </option>
                                <option value="Bibi" {{ old('hubungan_wali') == 'Bibi' ? 'selected' : '' }}>Bibi</option>
                                <option value="Kakek" {{ old('hubungan_wali') == 'Kakek' ? 'selected' : '' }}>Kakek
                                </option>
                                <option value="Nenek" {{ old('hubungan_wali') == 'Nenek' ? 'selected' : '' }}>Nenek
                                </option>
                                <option value="Lainnya" {{ old('hubungan_wali') == 'Lainnya' ? 'selected' : '' }}>Lainnya
                                </option>
                            </select>
                            @error('hubungan_wali')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Pekerjaan Wali -->
                        <div class="flex flex-col">
                            <label class="mb-2">Pekerjaan Wali</label>
                            <input type="text" name="pekerjaan_wali" class="border p-2 rounded-lg"
                                placeholder="Masukkan pekerjaan wali" value="{{ old('pekerjaan_wali') }}">
                            @error('pekerjaan_wali')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Penghasilan Wali -->
                        <div class="flex flex-col">
                            <label class="mb-2">Penghasilan Wali</label>
                            <select name="penghasilan_wali" class="border p-2 rounded-lg">
                                <option value="">-- Pilih Penghasilan Wali --</option>
                                <option value="0" {{ old('penghasilan_wali') == '0' ? 'selected' : '' }}>Tidak Bekerja
                                </option>
                                <option value="1000000" {{ old('penghasilan_wali') == '1000000' ? 'selected' : '' }}>
                                    Rp.1.000.000 - Rp.2.000.000</option>
                                <option value="2000000" {{ old('penghasilan_wali') == '2000000' ? 'selected' : '' }}>
                                    Rp.2.000.000 - Rp.3.000.000</option>
                                <option value="3000000" {{ old('penghasilan_wali') == '3000000' ? 'selected' : '' }}>
                                    Rp.3.000.000 - Rp.5.000.000</option>
                                <option value="5000000" {{ old('penghasilan_wali') == '5000000' ? 'selected' : '' }}>
                                    Rp.5.000.000 - Rp.10.000.000</option>
                                <option value="10000000" {{ old('penghasilan_wali') == '10000000' ? 'selected' : '' }}>
                                    Lebih dari Rp.10.000.000</option>
                            </select>
                            @error('penghasilan_wali')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Alamat Wali -->
                        <div class="flex flex-col">
                            <label class="mb-2">Alamat Wali</label>
                            <textarea name="alamat_wali" class="border p-2 rounded-lg"
                                placeholder="Masukkan alamat wali">{{ old('alamat_wali') }}</textarea>
                            @error('alamat_wali')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <!-- Nomor HP Wali -->
                        <div class="flex flex-col">
                            <label class="mb-2">Nomor HP Wali</label>
                            <input type="text" name="nomor_hp_wali" class="border p-2 rounded-lg"
                                placeholder="Masukkan nomor HP wali" value="{{ old('nomor_hp_wali') }}">
                            @error('nomor_hp_wali')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>
                    </div>
            </div>


            <!-- Dokumen Pendukung -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <div class="flex items-center mb-4">
                    <i class="fas fa-file-alt text-2xl text-green-600 mr-3"></i>
                    <h3 class="text-xl font-semibold" required >Dokumen Pendukung</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <label class="mb-2">Upload Pas Foto</label>
                            <input type="file" name="scan_foto" class="border p-2 rounded-lg" required>
                            @error('scan_foto')<span class="text-red-500 text-sm" >{{ $message }}</span>@enderror
                        </div>
                    
                        <div class="flex flex-col">
                            <label class="mb-2">Upload Kartu Keluarga</label>
                            <input type="file" name="scan_kk" class="border p-2 rounded-lg" required>
                            @error('scan_kk')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>
                       
                        <div class="flex flex-col">
                            <label class="mb-2">Upload KTP Ayah</label>
                            <input type="file" name="scan_ktp_ayah" class="border p-2 rounded-lg" required>
                            @error('scan_ktp_ayah')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col">
                            <label class="mb-2">Upload KTP Ibu</label>
                            <input type="file" name="scan_ktp_ibu" class="border p-2 rounded-lg" required>
                            @error('scan_ktp_ibu')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Syarat dan Ketentuan -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <div class="flex items-center">
                    <input type="checkbox" id="agree-terms" class="mr-3">
                    <label for="agree-terms" class="text-sm">
                        Saya menyetujui <a href="#" class="text-green-600 hover:underline">syarat dan ketentuan</a> yang
                        berlaku.
                    </label>
                </div>
            </div>
            
            <!-- Tombol Submit -->
            <div class="flex justify-end">
                <button id="submit-btn"
                class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition opacity-50 cursor-not-allowed">
                    Submit
                </button>
            </div>
        </form>

        </section>
    </main>

    <script src="main.js"></script>
</body>

</html>
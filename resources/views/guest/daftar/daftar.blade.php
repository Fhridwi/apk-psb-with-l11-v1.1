@extends('guest.layouts.app')

@section('content')
    <section class="section">
        <div class="row py-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container mt-5">
                                <div class="card shadow-lg p-4">
                                    <h4 class="text-center mb-4">Formulir Pendaftaran Santri</h4>

                                    {{-- Email --}}
                                    <h5 class="mt-3">Email Aktif</h5>
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-bold">Email Aktif</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Masukkan Email">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <small class="text-danger fw-bold">Pastikan Email Benar!!</small>
                                    </div>

                                    {{-- Data Santri --}}
                                    <h5 class="mt-4">Data Santri</h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="no_pendaftaran" class="form-label fw-bold">Nomor Pendaftaran</label>
                                            <input type="text" name="no_pendaftaran" value="{{ $no_pendaftaran }}"
                                                class="form-control" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nama_lengkap" class="form-label fw-bold">Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                                class="form-control @error('nama_lengkap') is-invalid @enderror" required>
                                            @error('nama_lengkap')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label for="tempat_lahir" class="form-label fw-bold">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                                class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                                            @error('tempat_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="tanggal_lahir" class="form-label fw-bold">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                                class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
                                            @error('tanggal_lahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="jenis_kelamin" class="form-label fw-bold">Jenis Kelamin</label>
                                            <select name="jenis_kelamin"
                                                class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
                                                <option value="">- Pilih -</option>
                                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                            </select>
                                            @error('jenis_kelamin')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="anak_ke" class="form-label fw-bold">Anak Ke</label>
                                            <input type="number" name="anak_ke" value="{{ old('anak_ke') }}"
                                                class="form-control @error('anak_ke') is-invalid @enderror" required>
                                            @error('anak_ke')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="asal_sekolah" class="form-label fw-bold">Asal Sekolah</label>
                                            <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah') }}"
                                                class="form-control @error('asal_sekolah') is-invalid @enderror" required>
                                            @error('asal_sekolah')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamat" class="form-label fw-bold">Alamat</label>
                                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                            rows="2" required>{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="program" class="form-label fw-bold">Program</label>
                                            <select name="program"
                                                class="form-control @error('program') is-invalid @enderror" required>
                                                <option value="">Pilih Program</option>
                                                @foreach($programs as $program)
                                                    <option value="{{ $program->program }}" {{ old('program') == $program->program ? 'selected' : '' }}>{{ $program->program }}</option>
                                                @endforeach
                                            </select>
                                            @error('program')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="sekolah" class="form-label fw-bold">Sekolah</label>
                                            <select name="sekolah"
                                                class="form-control @error('sekolah') is-invalid @enderror" required>
                                                <option value="">Pilih Sekolah</option>
                                                @foreach($sekolahs as $sekolah)
                                                    <option value="{{ $sekolah->sekolah }}" {{ old('sekolah') == $sekolah->sekolah ? 'selected' : '' }}>{{ $sekolah->sekolah }}</option>
                                                @endforeach
                                            </select>
                                            @error('sekolah')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="tahun_ajaran" class="form-label fw-bold">Tahun Ajaran</label>
                                            <select name="tahun_ajaran"
                                                class="form-control @error('tahun_ajaran') is-invalid @enderror" required>
                                                <option value="">Tahun Ajaran</option>
                                                @foreach ($tahunAjaran as $t)
                                                    <option value="{{ $t->id }}">{{ $t->tahun }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- DATA ORANG TUA -->
                            <div class="container mt-5">
                                <div class="card shadow-lg p-4">
                                    <h4 class="text-center mb-4 ">Data Orang Tua</h4>
                                    <div class="row">
                                        <!-- Nama Ayah & Nama Ibu -->
                                        <div class="col-md-6">
                                            <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                            <input type="text" name="nama_ayah" value="{{ old('nama_ayah') }}"
                                                class="form-control @error('nama_ayah') is-invalid @enderror" required>
                                            @error('nama_ayah')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                            <input type="text" name="nama_ibu" value="{{ old('nama_ibu') }}"
                                                class="form-control @error('nama_ibu') is-invalid @enderror" required>
                                            @error('nama_ibu')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Pekerjaan Ayah & Ibu -->
                                        <div class="col-md-6">
                                            <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                                            <input type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}"
                                                class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                                            @error('pekerjaan_ayah')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                                            <input type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}"
                                                class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                                            @error('pekerjaan_ibu')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Penghasilan Ayah & Ibu -->
                                        @php
                                            $penghasilan_options = [
                                                "0" => "Tidak Bekerja",
                                                "1000000" => "Rp.1.000.000 - Rp.2.000.000",
                                                "2000000" => "Rp.2.000.000 - Rp.3.000.000",
                                                "3000000" => "Rp.3.000.000 - Rp.5.000.000",
                                                "5000000" => "Rp.5.000.000 - Rp.10.000.000",
                                                "10000000" => "Lebih dari Rp.10.000.000"
                                            ];
                                        @endphp
                                        <div class="col-md-6">
                                            <label for="penghasilan_ayah" class="form-label">Penghasilan Ayah</label>
                                            <select name="penghasilan_ayah"
                                                class="form-control @error('penghasilan_ayah') is-invalid @enderror"
                                                required>
                                                <option value="">-- Pilih Penghasilan Ayah --</option>
                                                @foreach ($penghasilan_options as $value => $label)
                                                    <option value="{{ $value }}" {{ old('penghasilan_ayah') == $value ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            @error('penghasilan_ayah')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="penghasilan_ibu" class="form-label">Penghasilan Ibu</label>
                                            <select name="penghasilan_ibu"
                                                class="form-control @error('penghasilan_ibu') is-invalid @enderror"
                                                required>
                                                <option value="">-- Pilih Penghasilan Ibu --</option>
                                                @foreach ($penghasilan_options as $value => $label)
                                                    <option value="{{ $value }}" {{ old('penghasilan_ibu') == $value ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            @error('penghasilan_ibu')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Status Ayah & Ibu -->
                                        <div class="col-md-6">
                                            <label for="status_ayah" class="form-label">Status Ayah</label>
                                            <select name="status_ayah"
                                                class="form-control @error('status_ayah') is-invalid @enderror" required>
                                                <option value="">-- Pilih Status Ayah --</option>
                                                <option value="hidup" {{ old('status_ayah') == 'hidup' ? 'selected' : '' }}>
                                                    Hidup</option>
                                                <option value="meninggal" {{ old('status_ayah') == 'meninggal' ? 'selected' : '' }}>Meninggal</option>
                                            </select>
                                            @error('status_ayah')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="status_ibu" class="form-label">Status Ibu</label>
                                            <select name="status_ibu"
                                                class="form-control @error('status_ibu') is-invalid @enderror" required>
                                                <option value="">-- Pilih Status Ibu --</option>
                                                <option value="hidup" {{ old('status_ibu') == 'hidup' ? 'selected' : '' }}>
                                                    Hidup</option>
                                                <option value="meninggal" {{ old('status_ibu') == 'meninggal' ? 'selected' : '' }}>Meninggal</option>
                                            </select>
                                            @error('status_ibu')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Alamat Orang Tua -->
                                        <div class="col-md-6">
                                            <label for="alamat_orang_tua" class="form-label">Alamat Orang Tua</label>
                                            <textarea name="alamat_orang_tua"
                                                class="form-control @error('alamat_orang_tua') is-invalid @enderror"
                                                rows="2" required>{{ old('alamat_orang_tua') }}</textarea>
                                            @error('alamat_orang_tua')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Email Orang Tua -->
                                        <div class="col-md-6">
                                            <label for="email_orang_tua" class="form-label">Email Orang Tua</label>
                                            <input type="email" name="email_orang_tua" value="{{ old('email_orang_tua') }}"
                                                class="form-control @error('email_orang_tua') is-invalid @enderror"
                                                required>
                                            @error('email_orang_tua')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Nomor HP Orang Tua -->
                                        <div class="col-md-6">
                                            <label for="nomor_hp_orang_tua" class="form-label">No HP Orang Tua</label>
                                            <input type="text" name="nomor_hp_orang_tua"
                                                value="{{ old('nomor_hp_orang_tua') }}"
                                                class="form-control @error('nomor_hp_orang_tua') is-invalid @enderror"
                                                required>
                                            @error('nomor_hp_orang_tua')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- DATA WALI (Optional) -->
                            <div class="container mt-5">
                                <div class="card shadow-lg p-4">
                                    <h4 class="mt-4 text-center fw-bold ">Data Wali (Jika Ada)</h4>
                            <div class="row">
                                <!-- Hubungan Wali -->
                                <div class="col-md-6">
                                    <label for="hubungan_wali" class="form-label">Hubungan Wali</label>
                                    <select name="hubungan_wali" id="hubungan_wali"
                                        class="form-control @error('hubungan_wali') is-invalid @enderror">
                                        <option value="">-- Pilih Hubungan --</option>
                                        <option value="Ayah" {{ old('hubungan_wali') == 'Ayah' ? 'selected' : '' }}>Ayah
                                        </option>
                                        <option value="Ibu" {{ old('hubungan_wali') == 'Ibu' ? 'selected' : '' }}>Ibu</option>
                                        <option value="Kakak" {{ old('hubungan_wali') == 'Kakak' ? 'selected' : '' }}>Kakak
                                        </option>
                                        <option value="Paman" {{ old('hubungan_wali') == 'Paman' ? 'selected' : '' }}>Paman
                                        </option>
                                        <option value="Bibi" {{ old('hubungan_wali') == 'Bibi' ? 'selected' : '' }}>Bibi
                                        </option>
                                        <option value="Kakek" {{ old('hubungan_wali') == 'Kakek' ? 'selected' : '' }}>Kakek
                                        </option>
                                        <option value="Nenek" {{ old('hubungan_wali') == 'Nenek' ? 'selected' : '' }}>Nenek
                                        </option>
                                        <option value="Lainnya" {{ old('hubungan_wali') == 'Lainnya' ? 'selected' : '' }}>
                                            Lainnya</option>
                                    </select>
                                    @error('hubungan_wali')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Nama Wali -->
                                <div class="col-md-6 wali-fields">
                                    <label for="nama_wali" class="form-label">Nama Wali</label>
                                    <input type="text" name="nama_wali" id="nama_wali"
                                        class="form-control @error('nama_wali') is-invalid @enderror"
                                        value="{{ old('nama_wali') }}">
                                    @error('nama_wali')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Pekerjaan Wali -->
                                <div class="col-md-6 wali-fields">
                                    <label for="pekerjaan_wali" class="form-label">Pekerjaan Wali</label>
                                    <input type="text" name="pekerjaan_wali" id="pekerjaan_wali"
                                        class="form-control @error('pekerjaan_wali') is-invalid @enderror"
                                        value="{{ old('pekerjaan_wali') }}">
                                    @error('pekerjaan_wali')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Penghasilan Wali -->
                                <div class="col-md-6 wali-fields">
                                    <label for="penghasilan_wali" class="form-label">Penghasilan Wali</label>
                                    <select name="penghasilan_wali" id="penghasilan_wali"
                                        class="form-control @error('penghasilan_wali') is-invalid @enderror">
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
                                        <option value="10000000" {{ old('penghasilan_wali') == '10000000' ? 'selected' : '' }}>Lebih dari Rp.10.000.000</option>
                                    </select>
                                    @error('penghasilan_wali')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Alamat Wali -->
                                <div class="col-md-12 wali-fields">
                                    <label for="alamat_wali" class="form-label">Alamat Wali</label>
                                    <textarea name="alamat_wali" id="alamat_wali"
                                        class="form-control @error('alamat_wali') is-invalid @enderror">{{ old('alamat_wali') }}</textarea>
                                    @error('alamat_wali')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Nomor HP Wali -->
                                <div class="col-md-6 wali-fields">
                                    <label for="nomor_hp_wali" class="form-label">Nomor HP Wali</label>
                                    <input type="text" name="nomor_hp_wali" id="nomor_hp_wali"
                                        class="form-control @error('nomor_hp_wali') is-invalid @enderror"
                                        value="{{ old('nomor_hp_wali') }}">
                                    @error('nomor_hp_wali')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            </div>


                            <!-- UPLOAD DOKUMEN -->
                           <div class="container mt-5">
                             <div class="card shadow-lg p-4">
                            <h4 class="mt-4 text-center">Dokumen Santri</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="scan_foto" class="form-label">Foto</label>
                                    <input type="file" name="scan_foto"
                                        class="form-control @error('scan_foto') is-invalid @enderror">
                                    @error('scan_foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="scan_kk" class="form-label">Scan Kartu Keluarga</label>
                                    <input type="file" name="scan_kk"
                                        class="form-control @error('scan_kk') is-invalid @enderror">
                                    @error('scan_kk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="scan_ktp_ayah" class="form-label">Scan KTP Ayah</label>
                                    <input type="file" name="scan_ktp_ayah"
                                        class="form-control @error('scan_ktp_ayah') is-invalid @enderror">
                                    @error('scan_ktp_ayah')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="scan_ktp_ibu" class="form-label">Scan KTP Ibu</label>
                                    <input type="file" name="scan_ktp_ibu"
                                        class="form-control @error('scan_ktp_ibu') is-invalid @enderror">
                                    @error('scan_ktp_ibu')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                             </div>
                           </div>

                           <div class="container mt-5">
                            <div class="">
                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                <a href="{{ route('pendaftar.index') }}" class="btn btn-secondary mt-4">Kembali</a>
                            </div>
                           </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const hubunganWali = document.getElementById("hubungan_wali");
            const waliFields = document.querySelectorAll(".wali-fields");

            function toggleFields() {
                if (hubunganWali.value === "Ayah" || hubunganWali.value === "Ibu") {
                    waliFields.forEach(field => field.style.display = "none");
                } else {
                    waliFields.forEach(field => field.style.display = "block");
                }
            }
            hubunganWali.addEventListener("change", toggleFields);
            toggleFields();
        });
    </script>

@endsection
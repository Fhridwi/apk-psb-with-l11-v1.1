<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Penerimaan Santri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            font-size: 12px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        h4 {
            text-align: center;
            letter-spacing: 2px;
            text-decoration: underline;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .nomor-surat {
            text-align: center;
            margin-top: -10px;
            font-size: 10px;
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .data {
            width: 70%;
        }

        .foto-santri {
            width: 120px;
            height: 160px;
            border: 1px solid #000;
        }

        .label {
            display: inline-block;
            width: 160px;
        }

        .label2 {
            display: inline-block;
            width: 140px;
        }

        .ortu {
            margin-left: 20px;
        }

        .ortu p {
            margin: 5px 0;
        }

        .data p {
            margin: 5px 0;
        }

        .tabel {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .foto-container {
            width: 30%;
            text-align: center;
            vertical-align: middle;
            margin-top: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .info {
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: justify;
        }

        .ttd-table {
            width: 100%;
            margin-top: 20px;
            text-align: center;
            border-collapse: collapse;
            /* Menghindari garis ganda */
            position: relative;
            /* Container relatif untuk posisi absolut */
        }

        .ttd-table td {
            padding: 10px;
            /* Beri jarak lebih luas */
        }

        .ttd-table .tanggal {
            text-align: right;
            /* Posisi tanggal di kanan */
            padding-bottom: 20px;
            /* Jarak antara tanggal dan TTD */
        }

        .ttd-table .ttd {
            padding-top: 60px;
            /* Jarak antara teks "Orang Tua/Wali" dan garis TTD */
            position: relative;
            /* Relatif untuk penempatan absolut */
        }

        .ttd-table .ttd img {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: auto;
            z-index: -50;
        }

        .keterangan {
            margin-top: 20px;
            font-size: 11px;
            line-height: 1.5;
        }

        .footer {
            margin-top: 125px;
            text-align: center;
            font-size: 10px;
            color: #555;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }

        .footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('img/kop.png') }}" style="width: 100%;">
    </div>

    <h4>BUKTI PENDAFTARAN</h4>
    <p class="nomor-surat">TAHUN {{ $tahun->tahun }}</p>

    <div class="container">
        <table class="tabel">
            <tr>
                <td class="data">
                    <p><span class="label">NAMA SANTRI</span>: {{ $santri->nama_lengkap }}</p>
                    <p><span class="label">NO PENDAFTARAN</span>: {{ $santri->no_pendaftaran }}</p>
                    <p><span class="label">TANGGAL PENDAFTARAN</span>:
                        {{ \Carbon\Carbon::parse($santri->created_at)->translatedFormat('d F Y') }}</p>
                    <p><span class="label">TANGGAL CETAK</span>: {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}
                    </p>
                    <p><span class="label">JENIS KELAMIN</span>: {{ $santri->jenis_kelamin }}</p>
                    <p><span class="label">TEMPAT, TGL LAHIR</span>:
                        {{ $santri->tempat_lahir }},
                        {{ \Carbon\Carbon::parse($santri->tanggal_lahir)->translatedFormat('d F Y') }}
                    </p>


                    <p>NAMA ORANG TUA/WALI</p>
                    <p><span class="ortu label2">AYAH</span>: {{ $santri->orangTua->nama_ayah }}</p>
                    <p><span class="ortu label2">IBU</span>: {{ $santri->orangTua->nama_ibu }}</p>
                    <p><span class="ortu label2">WALI</span>: {{ $santri->wali->nama_wali ?? '-' }}</p>


                    <p><span class="label">NO HP</span>: {{ $santri->orangTua->nomor_hp_orang_tua }} /
                        {{ $santri->wali->nomor_hp_wali ?? '-' }}</p>
                    <p><span class="label">ASAL SEKOLAH</span>: {{ $santri->asal_sekolah }}</p>
                    <p><span class="label">PILIH PROGRAM</span>: {{ $santri->programSekolah->sekolah }}</p>
                    <p><span class="label">PILIH SEKOLAH</span>: {{ $santri->programSekolah->program }}</p>
                </td>
                <td class="foto-container">
                    <img src="{{ public_path('storage/' . $santri->dokumenSantri->scan_foto) }}" class="foto-santri">
                </td>
            </tr>
        </table>
    </div>

    <div class="info">
        <p>Dengan ini dinyatakan bahwa santri yang tertera di atas telah resmi terdaftar sebagai calon santri di PP.
            Cemerlang An-Najach Bahrul Ulum Tambakberas, untuk Tahun Ajaran 2025/2026.</p>
    </div>

    <table class="ttd-table" border="0">
        <tr>
            <td colspan="2" class="tanggal">Jombang, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td>Orang Tua/Wali</td>
            <td>Panitia PSB</td>
        </tr>
        <tr>
            <td class="ttd">______________________</td>
            <td class="ttd">
                Sdr. Fahri Dwi Hermawan
                <img src="{{ public_path('img/ttd.jpg') }}" alt="Tanda Tangan" width="200px">
            </td>
        </tr>
    </table>

    <div class="keterangan">
        <p><strong>Keterangan:</strong></p>
        <ol>
            <li>Silakan cetak bukti pendaftaran ini dan dibawa pada saat pengumpulan berkas / pembayaran awal.</li>
            <li>Untuk informasi lebih lanjut atau konfirmasi pembayaran, hubungi bendahara PSB di nomor
                <strong>085792336956</strong>.</li>
        </ol>
    </div>

    <div class="footer">
        <p>Terima kasih telah memilih PP. Cemerlang An-Najach Bahrul Ulum Tambakberas.</p>
        hubungi kami di <strong>085325685754</strong>.</p>
    </div>
</body>

</html>
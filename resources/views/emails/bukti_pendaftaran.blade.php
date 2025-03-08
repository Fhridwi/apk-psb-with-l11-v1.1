@component('mail::message')
# Bukti Pendaftaran Santri

Halo {{ $santri->nama_lengkap }},

Terima kasih telah mendaftar di pondok pesantren kami. Terlampir bukti pendaftaran dalam bentuk PDF.

Jika ada pertanyaan, silakan hubungi kami.

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent

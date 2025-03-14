@component('mail::message')
# Bukti Pendaftaran Santri

Assalamu'alaikum Wr. Wb.

Berikut ini adalah bukti pendaftaran santri yang telah diterima oleh sistem kami.

@component('mail::button', ['url' => 'https://pondokmu.sch.id'])
Kunjungi Website
@endcomponent

Jazakumullahu Khairan,<br>
{{ config('app.name') }}
@endcomponent

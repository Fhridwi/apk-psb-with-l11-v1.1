<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BuktiPendaftaranMail extends Mailable
{
    use Queueable, SerializesModels;

    public $santri;
    public $pdfPath;

    public function __construct($santri, $pdfPath)
    {
        $this->santri = $santri;
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this->subject('Bukti Pendaftaran Santri')
                    ->markdown('emails.bukti_pendaftaran')
                    ->attach($this->pdfPath, [
                        'as' => 'Bukti_Pendaftaran.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}


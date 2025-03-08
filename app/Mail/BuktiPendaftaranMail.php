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

    /**
     * Create a new message instance.
     */
    public function __construct($santri, $pdfPath)
    {
        $this->santri = $santri;
        $this->pdfPath = $pdfPath;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject('Bukti Pendaftaran Santri')
            ->view('emails.bukti_pendaftaran')
            ->attach($this->pdfPath, [
                'as' => 'Bukti-Pendaftaran-' . $this->santri->nama_lengkap . '.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}

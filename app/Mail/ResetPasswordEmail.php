<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this
            ->subject('Reset Password') // Subjek email
            ->view('folder_file_reset.template_kirim_ke_email') // Tampilan email
            ->with(['details' => $this->details]); // Data yang akan dipass ke tampilan
    }
}

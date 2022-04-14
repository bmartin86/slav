<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClanEdit extends Mailable
{
    use Queueable, SerializesModels;

    public $clan;
    public $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($clan, $request)
    {
        $this->clan = $clan;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.clan.edit')
            ->subject('Zahtjev za izmjenom podataka člana');
    }
}

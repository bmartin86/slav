<?php

namespace App\Mail;


use App\Models\User;
use Illuminate\Http\Request;
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
    public function __construct(User $clan, Request $request)
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
            ->subject('Zahtjev za izmjenom podataka');
    }
}

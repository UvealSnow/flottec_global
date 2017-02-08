<?php

namespace App\Mail;

use App\Pending;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmAccount extends Mailable {
    use Queueable, SerializesModels;
    public $pending;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Pending $pending) {
        $this->pending = $pending;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('email.confirm');
    }
}

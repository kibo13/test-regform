<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationAlert extends Mailable
{
  use Queueable, SerializesModels;

  public $person;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($person)
  {
    $this->person = $person;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    // title
    $title = 'ФОРМА РЕГИТСРАЦИИ С EDU.KZ';

    return $this->subject($title)->view('mail', [
      'person' => $this->person
    ]);
  }
}
<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     * @param $data
     * @return void
     */
    public function __construct($data)
    {
         $this->data =(object)$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')
                    ->with([
                        'username' => $this->data->username,
                        'email' => $this->data->email,
                        "subject" => $this->data->subject,
                        "messages" => $this->data->message
                    ]);;
    }
}

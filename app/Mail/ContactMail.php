<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;


  public function __construct($data)
    {
        $this->name = $data['name'];
        $this->phone = $data['phone'];
    }


    public function build()
    {
         return $this->from('no-reply@ahbk.kz')
                        ->view('email.contact-message')
                        ->with([
                            'name'=> $this->name,
                            'phone'=> $this->phone
                        ])
                        ->subject('Новая заявка с сата: www.ahbk.kz');
    }



}

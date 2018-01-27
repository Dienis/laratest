<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmitapplicationClass extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($material_name, $tel)
    {
        $this->material_name = $material_name;
        $this->tel = $tel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.submit_application')
                    ->with([
                        'material_name' => $this->material_name,
                        'tel' => $this->tel,
                    ])
                    ->subject('Новое письмо', 'Новое письмо');
    }
}
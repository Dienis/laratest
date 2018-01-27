<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $tel;
    protected $material;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel, $material)
    {
        $this->name = $name;
        $this->tel = $tel;
        $this->material = $material;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.calculation_delivery')
            ->with([
                'name' => $this->name,
                'tel' => $this->tel,
                'material' => $this->material,
            ])
            ->subject('Новое письмо', 'Новое письмо');
    }
}

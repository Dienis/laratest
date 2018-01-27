<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CalculationClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $tel;
    protected $email;
    protected $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel, $email, $msg)
    {
        $this->name = $name;
        $this->tel = $tel;
        $this->email = $email;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.calculation_top')
                    ->with([
                        'name' => $this->name,
                        'tel' => $this->tel,
                        'email' => $this->email,
                        'msg' => $this->msg,
                    ])
                    ->subject('Новое письмо', 'Новое письмо');
    }
}

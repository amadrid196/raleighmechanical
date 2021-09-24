<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $mail;
    public $view;
    public $phone;
    public $quest;
    /**
     * Se crean las variables publicas que se podran utilizar en las vistas de de correos.
     *
     * @return void
     */
    public function __construct($data) //Se obtienen los datos que vienen desde el controlador(contacto) y se pasan a las variables
    {

        $this->name  = $data['name'];
        $this->mail     = $data['mail'];
        $this->view      = $data["view"];
        $this->phone = $data['phone'];
        $this->quest = $data['quest'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view($this->view)->subject("Raleigh Mechanical"); // Se retorna a la vista la data, el subject queda estatito
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CodigoSesionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;

    public $codigo;

    /**
     * @param  $nombre  nombre del usuario al que se le envía el correo
     * @param  $codigo  codigo de acceso
     */
    public function __construct(string $nombre, string $codigo)
    {
        $this->nombre = $nombre;
        $this->codigo = $codigo;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Correo Codigo Acceso',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.codigo-sesion',
            with: [
                'nombre' => $this->nombre,
                'codigo' => $this->codigo,
            ],
        );
    }
}

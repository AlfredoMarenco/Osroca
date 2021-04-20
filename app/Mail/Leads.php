<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Leads extends Mailable
{
    use Queueable, SerializesModels;
    protected $modelo;
    protected $nombre;
    protected $correo;
    protected $telefono;
    protected $presupuesto;
    protected $credito;
    protected $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($modelo, $nombre, $correo, $telefono, $presupuesto, $credito, $contacto)
    {
        $this->modelo = $modelo;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->presupuesto = $presupuesto;
        $this->credito = $credito;
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.leads')->subject('Nuevo Lead Gran Calzada')->with([
            'modelo' => $this->modelo,
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'telefono' => $this->telefono,
            'presupuesto' => $this->presupuesto,
            'credito' => $this->credito,
            'contacto' => $this->contacto,
        ]);
    }
}

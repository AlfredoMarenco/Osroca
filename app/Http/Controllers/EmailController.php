<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $modelo = $request->modelo;
        $nombre = $request->nombre;
        $correo = $request->correo;
        $telefono = $request->telefono;
        $presupuesto = $request->presupuesto;
        $credito = $request->credito;
        $contacto = $request->contacto;

        switch ($modelo) {
            case 'balche':
                Mail::to($correo)->send(new Leads('Miraverde - Balche', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return 'Lo envie a mailtrap';
                break;
            case 'flamboyanplus':
                Mail::to($correo)->send(new Leads('Miraverde - Flamboyan Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return 'Lo envie a mailtrap';
                break;
            case 'bugambiliaplus':
                Mail::to($correo)->send(new Leads('Miraverde - Bugambilia Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return 'Lo envie a mailtrap';
                break;
            case 'ceibaplus':
                Mail::to($correo)->send(new Leads('Miraverde - Ceiba Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return 'Lo envie a mailtrap';
                break;
        }
    }
}

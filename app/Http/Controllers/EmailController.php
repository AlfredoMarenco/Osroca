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
                Mail::to(['alvarbu@gmail.com','dev@agenciavandu.com'])->locale('es')->send(new Leads('Miraverde - Balche', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return redirect('/download/ficha-tecnica-balche.pdf');
                break;
            case 'flamboyanplus':
                Mail::to(['alvarbu@gmail.com','dev@agenciavandu.com'])->locale('es')->send(new Leads('Miraverde - Flamboyan Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return redirect('/download/ficha-tecnica-flamboyan-plus.pdf');
                break;
            case 'bugambiliaplus':
                Mail::to(['alvarbu@gmail.com','dev@agenciavandu.com'])->locale('es')->send(new Leads('Miraverde - Bugambilia Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return redirect('/download/ficha-tecnica-bugambilia-plus.pdf');
                break;
            case 'ceibaplus':
                Mail::to(['alvarbu@gmail.com','dev@agenciavandu.com'])->locale('es')->send(new Leads('Miraverde - Ceiba Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return redirect('/download/ficha-tecnica-ceiba-plus.pdf');
                break;
            case 'aguamarina':
                Mail::to(['alvarbu@gmail.com','dev@agenciavandu.com'])->locale('es')->send(new Leads('Almada - Aguamarina', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return redirect('/download/Aguamarina.pdf');
                break;
            case 'magenta':
                Mail::to(['alvarbu@gmail.com','dev@agenciavandu.com'])->locale('es')->send(new Leads('Almada - Magenta', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return redirect('/download/Magenta.pdf');
                break;
            case 'violeta':
                Mail::to(['alvarbu@gmail.com','dev@agenciavandu.com'])->locale('es')->send(new Leads('Almada - Violeta', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return redirect('/download/Violeta.pdf');
                break;
            case 'violetaplus':
                Mail::to(['alvarbu@gmail.com','dev@agenciavandu.com'])->locale('es')->send(new Leads('Almada - Violeta Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                return redirect('/download/Cioleta-plus.pdf');
                break;
        }
    }
}

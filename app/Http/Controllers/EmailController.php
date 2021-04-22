<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

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
                Mail::to('info@grupocasitas.com.mx')->locale('es')->send(new Leads('Miraverde - Balche', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                Alert::success('Datos recibidos', '¡Tus datos han sido enviados con éxito!');
                return view('pdf.balche');
                break;
            case 'flamboyanplus':
                Mail::to('info@grupocasitas.com.mx')->locale('es')->send(new Leads('Miraverde - Flamboyan Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                Alert::success('Datos recibidos', '¡Tus datos han sido enviados con éxito!');
                return view('pdf.flamboyanplus');
                break;
            case 'bugambiliaplus':
                Mail::to('info@grupocasitas.com.mx')->locale('es')->send(new Leads('Miraverde - Bugambilia Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                Alert::success('Datos recibidos', '¡Tus datos han sido enviados con éxito!');
                return view('pdf.bugambiliaplus');
                break;
            case 'ceibaplus':
                Mail::to('info@grupocasitas.com.mx')->locale('es')->send(new Leads('Miraverde - Ceiba Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                Alert::success('Datos recibidos', '¡Tus datos han sido enviados con éxito!');
                return view('pdf.ceibaplus');
                break;
            case 'aguamarina':
                Mail::to('info@grupocasitas.com.mx')->locale('es')->send(new Leads('Almada - Aguamarina', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                Alert::success('Datos recibidos', '¡Tus datos han sido enviados con éxito!');
                return view('pdf.aguamarina');
                break;
            case 'magenta':
                Mail::to('info@grupocasitas.com.mx')->locale('es')->send(new Leads('Almada - Magenta', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                Alert::success('Datos recibidos', '¡Tus datos han sido enviados con éxito!');
                return view('pdf.magenta');
                break;
            case 'violeta':
                Mail::to('info@grupocasitas.com.mx')->locale('es')->send(new Leads('Almada - Violeta', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                Alert::success('Datos recibidos', '¡Tus datos han sido enviados con éxito!');
                return view('pdf.violeta');
                break;
            case 'violetaplus':
                Mail::to('info@grupocasitas.com.mx')->locale('es')->send(new Leads('Almada - Violeta Plus', $nombre, $correo, $telefono, $presupuesto, $credito, $contacto));
                Alert::success('Datos recibidos', '¡Tus datos han sido enviados con éxito!');
                return view('pdf.violetaplus');
                break;
        }
    }
}

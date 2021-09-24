<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMail extends Controller
{
    public function PostContacto(Request $request) // Obtenemos los datos que nos envian por la ruta PostContacto
    {

        $data = array(
            'name'   => $request['firstName'] . ' ' . $request['lastName'],
            'mail'      => $request['email'],
            'view'      => "sendEmail", // Se establece estatica la vista que tiene la estructura para el cliente
            'phone' => $request['phone'],
            'quest' => $request['quest']
        ); // Creamos un arreglos con los datos recibidos desde el formulario de contacto a traves de axios, javascript

        Mail::to($request->email)->send(new contactMail($data)); // Se hace en envio del correo al cliente que realizo el formulario
        /*         $data = array(
            'name'   => $request['name'],
            'mail'      => $request['mail'],
            'view'      => "sendEmailCreo", // Se establece estatica la vista que tiene la estructura para la empresa
            'phone' => $request['phone'],
            'quest' => $request['quest']
        ); // Creamos un arreglos con los datos recibidos desde el formulario de contacto a traves de axios, javascript
        Mail::to('info@creovrd.com')->send(new contactMail($data)); // Se hace en envio del correo a la empresa, el correo queda estatico
 */
    }
}

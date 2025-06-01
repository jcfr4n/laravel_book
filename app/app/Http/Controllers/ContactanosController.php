<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'mensaje' => 'required|string|max:1000',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('user@example.com')->send($correo);
        return redirect()->route('contactanos.index')->with('msgContacto', 'Mensaje enviado correctamente.');

    }
}

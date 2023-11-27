<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }


    public function submitForm(Request $request)
    {
        // Aquí puedes agregar la lógica para enviar el correo.
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to('robertoramirezmoreno@gmail.com')->send(new ContactFormMail($data));

        return redirect('/')->with('success', 'Message sent successfully!');
    }
}

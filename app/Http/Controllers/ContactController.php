<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\User;
// use Illuminate\Http\Request;
use App\Mail\SendContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact.form");
    }

    # ENVIA EL EMAIL
    /**
     * Enviar el email
     *
     * Utilizados anteriormente
     * Request $request
     * @return void
     */
    public function send(ContactFormRequest $request)
    {
        try {
            // $this->validate($request, [
            //     "subject" => "required|string|min:5|max:100",
            //     "message" => "required|string|min:5"
            // ]);
            // dd($request->input());
            Mail::to(User::first())->send(
                new SendContactForm($request->input('subject'), $request->input('message'))
            );
            return back()->with('success','¡El mensaje se ha enviado correctamente!');

        } catch (\Exception $e) {
            return back()->with('error','Ha fallado el envío del mensaje: '.$e->getMessage());

        }
    }
}

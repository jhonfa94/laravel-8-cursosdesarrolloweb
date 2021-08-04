<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\SendContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact.form");
    }

    # ENVIA EL EMAIL
    public function send(Request $request)
    {
        $this->validate($request, [
            "subject" => "required|string|min:5|max:100",
            "message" => "required|string|min:5"
            // "message" => "required|string|min:20|max:3000"
        ]);
        // dd($request->input());
        Mail::to(User::first())->send(
            new SendContactForm($request->input('subject'), $request->input('message'))
        );
    }
}

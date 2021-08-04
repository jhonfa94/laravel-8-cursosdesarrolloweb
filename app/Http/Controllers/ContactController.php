<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            "subjet" => "required|string|min:5|max:100",
            "message" => "required|string|min:20"
            // "message" => "required|string|min:20|max:3000"
        ]);
        // dd($request->input());
    }
}

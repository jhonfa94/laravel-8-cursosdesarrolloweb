<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    // public function __invoke()
    // {
    //     return "Hola desde el método Invoke";
    // }
    public function index(string $name):string
    {
        return "Hola {$name}";
    }
}

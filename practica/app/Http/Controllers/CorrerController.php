<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorrerController extends Controller
{
    public function index()
    {
        return view('correr');
    }

    public function cuerda()
    {
        return view('cuerda');
    }

    public function ciclismo()
    {
        return view('ciclismo');
    }

    public function caminar()
    {
        return view('caminar');
    }

    public function gym()
    {
        return view('gym');
    }
}

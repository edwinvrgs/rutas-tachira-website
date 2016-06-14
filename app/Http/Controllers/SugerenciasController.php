<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SugerenciasController extends Controller
{
    public function index()
    {
        return view('sugerencias');
    }
}

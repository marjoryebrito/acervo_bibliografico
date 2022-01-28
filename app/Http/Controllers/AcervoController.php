<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcervoController extends Controller
{
    public function acervo(){
        return view('app.cliente.acervo');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobrenos(){
        return view('app.cliente.sobrenos');
    }
}

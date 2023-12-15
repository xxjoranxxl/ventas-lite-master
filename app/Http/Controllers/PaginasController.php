<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function __invoke(){
        return view('miperfil');
    }
}

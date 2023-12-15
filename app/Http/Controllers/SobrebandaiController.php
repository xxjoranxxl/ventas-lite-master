<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobrebandaiController extends Controller
{
    public function __invoke(){
        return view('sobrebandai');
    }
}

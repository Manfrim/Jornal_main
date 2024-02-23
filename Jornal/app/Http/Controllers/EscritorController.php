<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscritorController extends Controller
{
    public function escritor(){
        return view("site.escritor");
    }
}

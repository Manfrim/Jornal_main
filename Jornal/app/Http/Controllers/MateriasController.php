<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class MateriasController extends Controller
{
    public function materias(){
        $materias = DB::select('SELECT * FROM jornal ORDER BY id DESC');
        $agent = new Agent();
        $i = "col-md-6";
        if ($agent->isMobile()) {
            
            $i = "col-md-12";
         } else {
            
         }

        return view("site.materias", ["materias"=> $materias, "i" => $i]);
    }
}

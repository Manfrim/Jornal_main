<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    public function principal(){
        
        $ultimos3 = DB::select('SELECT * FROM materia ORDER BY id DESC LIMIT 3');


        return view("site.index", ["ultimos3" => $ultimos3]);
    }

}

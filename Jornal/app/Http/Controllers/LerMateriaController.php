<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LerMateriaController extends Controller
{
   public function LerMateria(Request $request, $id){
        dd($id);
        return view('site.lermateria');
   }
}

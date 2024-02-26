<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Materia;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ValidaLogin extends Controller
{
    private $credentials;
    public function valida_login(Request $request){
        $this->credentials = $request->only('email', 'password');
        if(Auth::attempt($this->credentials)){
            return redirect()->route('site.editamateria');
        }
        else{
            return redirect()->back();
        }
    }

    
    public function edita_materia_view(){
        $titulos = DB::select('SELECT nome_materia, id FROM jornal');
        return view('site.editormaterias',['titulos'=>$titulos]);
    }

    public function edita_materia(Request $request){
            $nome_materia = $request->input('titulo');
            $resumo_materia = $request->input('resumo');
            $materia_p1 = $request->input('materia_p1');
            $materia_p2 = $request->input('materia_p2');
            $materia_p3 = $request->input('materia_p3');
            $materia_p4 = $request->input('materia_p4');
            $imagem_capa = $request->input('imagem_capa');
            $imagem_1 = $request->input('imagem_1');
            $imagem_2 = $request->input('imagem_2');
            $id = $request->input('id');
            $data = ([
                'nome_materia' => $nome_materia,
                'resumo_materia' => $resumo_materia,
                'materia_p1' => $materia_p1,
                'materia_p2'=> $materia_p2,
                'materia_p3'=> $materia_p3,
                'materia_p4'=> $materia_p4,
                'imagem_capa'=> $imagem_capa,
                'imagem_1'=> $imagem_1,
                'imagem_2' => $imagem_2,

            ]);
        
            if (Auth::attempt($request->only('email', 'password'))) {
                if($id == 1){
                DB::table('jornal')->insert($data);
                
            
                }
            

            
        }
    }
}

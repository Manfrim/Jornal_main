<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidaLogin extends Controller
{
    public function valida_login(Request $request){
        $user = $request->input('user');
        $password = $request->input('password');
        dd($user, $password);
        return view('site.validalogin');
    }
}

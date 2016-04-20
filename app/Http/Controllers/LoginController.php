<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
     public function store(Request $request)
    {
         if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //crea una variable de sesion del usuario
            $usuario = Auth::user();

                if(Auth::check()){
                    $request->session()->put('administrador', $usuario);
                    return redirect('/administrador');
                }else{
                    return back();
                }
                
                return back()->with('error', true); //Permite declarar una variable de sesion flash
        }
        //return redirect('/');
        return back()->with('error', true); //Permite declarar una variable de sesion flash
    }
}

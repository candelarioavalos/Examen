<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $usuario= \DB::table('usuarios')->insert([
        'nombre' => $request->nombre,
        'email' =>  $request->email,
        'password' => \Hash::make($request->password),
        ]);
        return redirect('/');
    }
}

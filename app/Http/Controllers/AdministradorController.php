<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdministradorController extends Controller
{
    public function index(){
        return view('administrador.panel');
    }

    public function logout(){
        session()->forget('administrador');

        //Auth::logout();
        session()->flush();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mascota;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascota = Mascota::all();
        return view('administrador.registrarmascota',['mascotas' => $mascota->toArray()]);
    }
    public function store(Request $request)
    {
        $mascota = Mascota::create($request->all());
        if($mascota){
            //$request->session
            return redirect('/administrador/mascota');
        }
    }
    public function show($id)
    {
        $mascota = Mascota::find($id);
            if (!is_null($mascota))
                return view('administrador.mostrarmascota', ['mascotas' => $mascota->toArray()]);
            else
                return response('La mascota no ha sido registrada', 404);
    }
}

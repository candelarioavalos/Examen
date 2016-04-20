@extends('templates.administrador')
@section('tittle')
        <title>Bienvenido {{session()->get('administrador')->nombre}}</title>
@stop
@section('content')

<div class="container">

    <div class="content">
        <div class="title center-align"><h2>Panel de administración</h2></div>
    </div>
    <div class="row">
    </div>
    <div class="row">

        <table  class="center-align">
            <tr  class="center-align">
                <td class="center-align">
                    <a href="/administrador/mascota">
                        <button class ="waves-effect waves-light center-align">
                                        REGISTRAR MASCOTA
                        </button>
                    </a>
                    <a href="/logout">
                        <button class ="waves-effect waves-light center-align">
                            SALIR
                        </button>
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
</div>

@stop
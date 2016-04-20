@extends('templates.veterinaria')
@section('tittle')
        <title>Iniciar sesión</title>
@stop
@section('content')

<section class = "container">
    <div class="row">
        <div class = "col s6">
            <h2 class="center-align">Iniciar sesión</h2>
            <div class = "card-panel form-acceso">

                @if(Session::has('error'))
                <p class = 'error'>Usuario no encontrado</p>

                @endif

                <form class = "col-s12" action = "/login" method = "POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class = "input-field col s12">
                            <input id="email" type="email" class="validate" name ="email">
                            <label for="email">Email de usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class = "input-field col s12">
                            <input id="password" type="password" class="validate" name ="password">
                            <label for="password">Password de usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class = "input-field col s12">
                            <a href="/" class="btn waves-effect waves-light">Regresar</a>
                            <button type = "submit" class ="waves-effect waves-light btn right">
                                Iniciar Sesión
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@stop
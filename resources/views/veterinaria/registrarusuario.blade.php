@extends('templates.veterinaria')
@section('tittle')
        <title>Registrar usuario</title>
@stop
@section('content')

<div class="container">
    <div class="row">
        <div class="col s6">
            <h2 class="center-align">Registro de usuario</h2>
            <div class = "card-panel form-acceso">
            	<table>
            		<tr>

            			<td class="center-align">
            				<form class="col s12" action="/registrousuario" method="POST">
            					{{ csrf_field() }}
			                    <div class="row">
			                        <div class="input-field col s12">
			                            <input type="text" class="validate" name="nombre">
			                            <label><i class="fa fa-user"></i>&nbsp Nombre de Usuario</label>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="input-field col s12">
			                            <input type="email" class="validate" name="email">
			                            <label><i class="fa fa-envelope"></i>&nbsp Email de Usuario</label>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="input-field col s12">
			                            <input id="pass" type="password" class="validate" name="password">
			                            <label for="pass"><i class="fa fa-key"></i>&nbsp Password de Usuario</label>
			                        </div>
			                    </div>
			                    </div>
			                    <div class="divider"></div>
			                    <div class="row">
			                        <div class="col m12">
			                            <p class="right-align">
			                            	<a href="/" class="btn waves-effect waves-light"> <i class="fa fa-arrow-left"></i> &nbsp Regresar</a>
			                                <button class="btn waves-effect waves-light" type="submit" name="action">REGISTRAR &nbsp<i class="fa fa-arrow-right"></i>
			 	 							</button>
			                            </p>
			                        </div>
			                    </div>
			                </form>
            			</td>
            		</tr>
            	</table>
            </div>
        </div>
    </div>
</div>

@stop
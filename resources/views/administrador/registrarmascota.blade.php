@extends('templates.administrador')
@section('tittle')
        <title>Mascotas</title>
@stop
@section('content')

<section id="section-ingresar" class="container">
	        <div class="col s6">
	            <h2 class="center-align">Registro de mascotas</h2>
	            <div class = "card-panel form-acceso col s6">
	            				<form class="col s6" action="/registrarmascota" method="POST">
	            					 {{ csrf_field() }}
				                    <div class="row">
				                        <div class="input-field col s6">
				                            <input type="text" class="validate" name="nombre">
				                            <label>&nbsp Nombre de Mascota</label>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="input-field col s6">
				                            <input type="text" class="validate" name="edad">
				                            <label>&nbsp Edad</label>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="input-field col s6">
				                            <input type="text" class="validate" name="tipo">
				                            <label for="pass">&nbsp Tipo</label>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="input-field col s6">
				                            <input type="text" class="validate" name="color">
				                            <label for="pass">&nbsp Color</label>
				                        </div>
				                    </div>
				                    </div>
				                    <div class="divider"></div>
				                    <div class="row center-align">
				                        <div class="col s6">
				                            <p class="right-align">
				                            	<a href="/administrador"><button class ="btn waves-effect waves-light"><i class="fa fa-arrow-left"></i>&nbsp REGRESAR</button></a>
				                                <button class="btn waves-effect waves-light" type="submit" name="action">REGISTRAR &nbsp<i class="fa fa-arrow-right"></i>
				 	 							</button>
				                            </p>
				                        </div>
				                    </div>
				                </form>
	            </div>
	        </div>
	
	<?php foreach ($mascotas as $mascota): ?>
	    <a href="/mostrarmascota/<?=$mascota['id']?>"><?=$mascota['nombre']?></a>
	      <br>
  	<?php endforeach ?>

</section>

@stop
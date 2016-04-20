@extends('templates.administrador')

@section('titulo')
        <title>Mascota <?=$mascota['nombre']?></title>
@stop

@section('content')

	<p>
		Nombre: <?=$mascota['nombre']?>
		<br>
		Edad: <?=$mascota['edad']?>
		<br>
		Tipo: <?=$mascota['tipo']?>
		<br>
		Color: <?=$mascota['color']?>
	</p>
<a href="/administrador/mascota" class="btn waves-effect waves-light">Regresar</a>
@stop
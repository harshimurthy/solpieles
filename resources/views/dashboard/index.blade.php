@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="well">
			<h1 class="text-center">Bienvenido {{ strtoupper(auth()->user()->name) }}</h1>
		</div>
	</div>
	<div class="container">
		<ul>
			<li>Conteo de Usuarios</li>
			<li>Usuarios registrados este mes</li>
			<li>Listado de roles con conteo de usuarios</li>
			<li>Conteo de usuarios sin un rol</li>
			<li>Conteo de Mensajes sin contestar</li>
			<li>Conteo de tareas pendientes para este usuario</li>
		</ul>
		
		{{ $user }}

	</div>
@endsection
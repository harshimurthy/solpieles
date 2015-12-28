@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="jumbotron animated fadeInUp">
			<h1 class="text-center">Welcome {{ strtoupper($user->name) }}</h1>
		</div>
	</div>
	<div class="container">

		<div class="row">
			@include('dashboard._minibox', [
				'title'       => $user->usersCount,
				'description' => 'Users registered',
				'class'       => 'animated rotateIn',
				'route'       => 'admin.users.index',
				'routeText'   => 'View Users'
			])



			@include('dashboard._minibox', [
				'title'       => $user->rolesCount,
				'description' => 'Roles created',
				'class'       => 'animated fadeInLeft',
				'route'       => 'admin.roles.index',
				'routeText'   => 'View Roles'
			])

			@include('dashboard._minibox', [
				'title'       => $user->todosCount,
				'description' => 'Tasks you have Pending',
				'class'       => 'animated fadeInDown',
				'route'       => 'admin.todos.index',
				'routeText'   => 'View Tasks'
			])

			@include('dashboard._minibox', [
				'title'       => $user->messagesCount,
				'description' => 'Messages not aswered',
				'class'       => 'animated fadeInRight',
				'route'       => 'admin.messages.index',
				'routeText'   => 'View Messages'
			])

			@include('dashboard._minibox', [
				'title'       => $user->contactsCount,
				'description' => 'Contacts created by yourself',
				'class'       => 'animated fadeInLeft',
				'route'       => 'admin.contacts.index',
				'routeText'   => 'View Contacts'
			])

			@if ( $user->role )
				@include('dashboard._minibox', [
					'title'       => ucwords($user->role->role),
					'description' => 'Is the role you are assigned to.',
					'class'       => 'animated fadeInDown',
					'route'       => 'admin.roles.index',
					'routeText'   => 'View Roles'
				])
			@endif
		</div>

		{{-- <div class="clearfix"></div> --}}
{{-- 
		<ul>
			<li>Conteo de Usuarios</li>
			<li>Usuarios registrados este mes</li>
			<li>Listado de roles con conteo de usuarios</li>
			<li>Conteo de usuarios sin un rol</li>
			<li>Conteo de Mensajes sin contestar</li>
			<li>Conteo de tareas pendientes para este usuario</li>
		</ul>
		
		{!! $user !!} --}}

	</div>
@endsection
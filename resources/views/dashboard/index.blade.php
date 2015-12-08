@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="well">
			<h1 class="text-center">Bienvenido {{ strtoupper(auth()->user()->name) }}</h1>
		</div>
	</div>
	<div class="container">
		
		{{ $user }}

	</div>
@endsection
@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
			<div class="well">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="page-header text-center">Detalles de la tarea [{{ $todo->name }}]</h3>

						<strong>Estado:</strong> 
						<br>
						<div class="col-sm-11 col-sm-offset-1">
							<span class="label label-{{ $todo->done ? 'success' : 'warning' }}">{{ $todo->done ? "Completada" : "Pediente" }}</span>
						</div>

						<strong>Establecida para: </strong>
						<div class="col-sm-11 col-sm-offset-1">
							{{ $todo->due }}
						</div>

						<br> 
						<strong>Detalles: </strong>
						<div class="col-sm-11 col-sm-offset-1">
							{{ $todo->description }}
						</div>

						<hr>

						<a href="{{ URL::previous() }}"><i class="fa fa-arrow-circle-left"></i> Regresar </a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
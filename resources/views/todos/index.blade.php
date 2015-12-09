
@extends('layouts.admin')

@section('content')
	<div class="container">

			{{-- {{ dd($todos)->toJson() }} --}}
			<?php 
				$pending = [];
				$completed = [];

				foreach ($todos as $value){
					if ($value->done) {
						array_push($completed, $value);
					} else {
						array_push($pending, $value);
					}				
				}
			 ?>
		<div class="col-sm-8 col-sm-push-4">
			<div class="table-responsive">
				@if (count($pending) > 0)
					
					<h1 class="page-header text-center text-warning">Tus Tareas Pendientes</h1>
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Tarea:</th>
								<th>Programada Para:</th>
								<th colspan="2">Estado:</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($pending as $todo)
								<tr class="{{ $todo->done ? 'success' : '' }}">
									<td><a href="{{ route('admin.todos.show', $todo->id) }}">{{ $todo->name }}</a></td>
									<td class="col-xs-3">{{ $todo->due }}</td>
									<td class="col-xs-1">
										@if ($todo->done)
											<a href="{{ route('admin.todos.incompletar', $todo->id) }}" class="text-success"><i class="fa fa-check-circle-o"></i></a>
										@else
											<a href="{{ route('admin.todos.completar', $todo->id) }}" class="text-warning"><i class="fa fa-circle-o"></i></a>
										@endif								
									</td>
									<td class="col-xs-1">
										{!! delete_button('admin.todos.destroy', $todo->id) !!}							
									</td>
								</tr>							
							@endforeach
						</tbody>
					</table>					
				@endif
				
				{{-- Completed --}}
				@if (count($completed) > 0)
					<hr>
					<h1 class="page-header text-center text-info">Tareas Completadas</h1>
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th>Tarea:</th>
								<th>Programada Para:</th>
								<th colspan="2">Estado:</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($completed as $todo)
								<tr class="{{ $todo->done ? 'success' : '' }}">
									<td><a href="{{ route('admin.todos.show', $todo->id) }}">{{ $todo->name }}</a></td>
									<td class="col-xs-3">{{ $todo->due }}</td>
									<td class="col-xs-1">
										@if ($todo->done)
											<a href="{{ route('admin.todos.incompletar', $todo->id) }}" class="text-success"><i class="fa fa-check-circle-o"></i></a>
										@else
											<a href="{{ route('admin.todos.completar', $todo->id) }}" class="text-warning"><i class="fa fa-circle-o"></i></a>
										@endif								
									</td>
									<td class="col-xs-1">
										{!! delete_button('admin.todos.destroy', $todo->id) !!}							
									</td>
								</tr>						
							@endforeach
						</tbody>
					</table>	
				@endif
			</div>
			{!! $todos->render() !!}
		</div>	
		<div class="col-sm-4 col-sm-pull-8">
			@include('todos.create')
		</div>	

		
	</div>

	
@endsection
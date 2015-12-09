@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
			<div class="row">
				<div class="well">
					<h1 class="page-header text-center">Listado de Mensajes
					</h1>
					{!! Form::open(['route'=>['admin.messages.search'], 'method'=>'GET', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off"]) !!}		
						<div class="form-group {{ $errors->has('search') ? 'has-error' : null }}">
							{{-- {!! Form::label('search', 'Buscar:', ['class'=>'']) !!} --}}
							<div class="input-group">

								{!! Form::input('search', 'search', null, ['class'=>'form-control', 'placeholder'=>'Buscar']) !!}
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default">
										<i class="fa fa-search"></i>
									</button>
								</div>
								<div class="input-group-btn"><a href="{{ route('admin.messages.index') }}" class="btn btn-default">Reset</a></div>

							</div>	

						    <p class="help-block">Puede buscar por cualquier valor</p>

						</div>
					{!! Form::close() !!}
					<!-- /. Buscar -->
					
					@if ($messages->count() > 0)
						<div class="table-responsive">
							<table class="table table-hover table-condensed">
								<thead>
									<tr>
										<th>Name:</th>
										<th>Subject:</th>
										<th>Phone:</th>
										<th>Email:</th>	
										<th>Mark as Viewed:</th>	
									</tr>
								</thead>
								<tbody>
									@foreach ($messages as $message)
										<tr>
											<td>
												<a href="{{ route('admin.messages.show', $message->id) }}">{{ $message->name }}</a>
											</td>
											<td>{{ $message->subject }}</td>
											<td>{{ $message->phone }}</td>
											<td>
												<a href="mailto:{{ $message->email }}?Subject={{ $message->subject }}!" target="_new">
													{{ $message->email }}
												</a>
											</td>
											<td class="text-center">
												<a href="{{ route('admin.messages.edit', $message->id) }}">
													<i class="fa fa-check-circle"></i>
												</a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					@else
						<h3>No hay Mensajes registrados con el criterio de búsquda especificado..</h3>
					@endif

					{!! $messages->render() !!}
				</div>
			</div>
		</div>
	</div>

	
@endsection
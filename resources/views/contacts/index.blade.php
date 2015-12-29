@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
			<div class="well">
				<div class="row">
					<h1 class="page-header text-center animated rollIn">Listado de Contactos
						<a href="{{ route('admin.contacts.create') }}">
							<span class="fa fa-plus"></span>
						</a> 
					</h1>
				</div>
				<div class="row">
					<div class="col-sm-12">
						{!! Form::open(['route'=>['admin.contacts.search'], 'method'=>'GET', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off"]) !!}		
							<div class="form-group {{ $errors->has('search') ? 'has-error' : null }}">
								{!! Form::label('search', 'Buscar:', ['class'=>'']) !!}
								<div class="input-group">
									{!! Form::input('search', 'search', null, ['class'=>'form-control', 'placeholder'=>'Buscar']) !!}
									<div class="input-group-btn">
										<button type="submit" class="btn btn-default">
											<i class="fa fa-search"></i>
										</button>
									</div>
									<div class="input-group-btn">
										<a href="{{ route('admin.contacts.index') }}" class="btn btn-default">All</a>
									</div>
								</div>							
							    <p class="help-block">Puede buscar por cualquier valor</p>
							</div>
						
						{!! Form::close() !!}
					</div>
					<!-- /. Buscar -->
{{--  --}}
					<div class="row col-sm-12">
						@if ($contacts->count() > 0)

							@foreach ($contacts as $contact)
								<div class="col-sm-4">
									<div class="panel panel-default">
										  <div class="panel-heading">
												<h3 class="panel-title">
													<a href="{{ route('admin.contacts.show', $contact->id) }}">
														{{ $contact->name }} 
														<span class="fa fa-eye"></span>				
													</a>
												</h3>
										  </div>
										  <div class="panel-body">

												<a href="{{ asset($contact->photo) }}" target="_new">
													<img src="{{ asset($contact->photo) }}" class="img-responsive" alt="Image" height="50">
												</a> <br>
												<i class="fa fa-phone"></i>	{{ $contact->mobile }} <br><br>

												<i class="fa fa-phone"></i>	{{ $contact->secondary }} <br><br>

												<a href="mailto:$contact->email"><i class="fa fa-envelope"></i> {{ $contact->email }}</a><br><br>									

												<i class="fa fa-birthday-cake"></i>	{{ date("M, d", strtotime($contact->dob)) }} <br><br>

										  </div>
									</div>
								</div>
								
							@endforeach
						@else
							<h3>No hay Contacts registrados con el criterio de búsquda especificado..</h3>
						@endif
					</div>
					
					<div class="col-sm-12">
						
						{!! $contacts->render() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

	
@endsection
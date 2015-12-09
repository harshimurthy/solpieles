@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="well">
				<div class="row">
				</div>

				{!! Form::open(['route'=>['admin.messages.update', $message->id], 'method'=>'PUT', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off"]) !!}

					<div class="form-group">
						<h1 class="text-warning">Do you surely want to mark this message as viewed?</h1>
						<button type="submit" class="btn btn-warning">Mark as Viewed</button>
					</div>
				
				{!! Form::close() !!}

				<hr>

				<p><strong>Message from</strong> {{ $message->name }}</p>
				<p><strong>With message</strong> {{ $message->message }}</p>
				<a href="{{ route('admin.contacts.index') }}">Retornar a la lista de Message <i class="fa fa-arrow-circle-left"></i></a>
			</div>
		</div>
	</div>
@endsection
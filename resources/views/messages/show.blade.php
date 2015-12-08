@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="col-sm-6 col-sm-offset-1 col-md-8 col-md-offset-2">
			<div class="well">
				<div class="row">
					<h3 class="page-header text-center">Detalles del Mensage [{{ $message->name }}]</h3>

					<div class="col-sm-12">

						<strong>Name: </strong>
							{{ $message->name }}

						<br> <strong>Subject: </strong>
							{{ $message->subject }}

						<br> <strong>Phone: </strong>
							{{ $message->phone }}

						<br> <strong>Email: </strong>
							<a href="mailto:{{ $message->email }}" target="_new">{{ $message->email }}</a>

						<br> <strong>Message:</strong> <br>
							{{ $message->message }}

						

					</div>
						{{-- {{ $message }} --}}
					<hr>

					<div class="col-sm-8 col-sm-offset-2">
						<a href="{{ URL::previous() }}" class="pull-left"><i class="fa fa-arrow-circle-left"></i> Regresar </a>
						<a href="{{ route('admin.messages.edit', $message->id) }}" class="pull-right text-warning"> Editar <i class="fa fa-pencil"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
			<div class="well">
				<div class="row">
					<div class="col-sm-6">
						<img src="{{ asset($contact->photo) }}" class="img-responsive" alt="Image">
					</div>

					<div class="col-sm-6">
						<div class="panel panel-default">
							  <div class="panel-heading">
									<h3 class="panel-title">{{ strtoupper($contact->name) }}</h3>
							  </div>
							  <div class="panel-body">
									<i class="fa fa-phone"></i>	{{ $contact->mobile }} <br><br>

									<i class="fa fa-phone"></i>	{{ $contact->secondary }} <br><br>

									<a href="mailto:{{ $contact->email }}" target="_new"><i class="fa fa-envelope"></i> {{ $contact->email }}</a><br><br>									

									<i class="fa fa-birthday-cake"></i>	{{ date("M, d", strtotime($contact->dob)) }} <br><br>

									<hr>

									<h4>Address:</h4>
									{{ $contact->address }}



							  </div>
						</div>
					</div>
				</div>

				<div class="row">				

					<div class="col-sm-8 col-sm-offset-2">
						<a href="{{ URL::previous() }}" class="pull-left"><i class="fa fa-arrow-circle-left"></i> Regresar </a>
						<a href="{{ route('admin.contacts.edit', $contact->id) }}" class="pull-right text-warning"> Editar <i class="fa fa-pencil"></i></a>
					</div>
				</div>
			</div>

		</div>
	</div>
@endsection
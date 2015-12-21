<style type="text/css">
	.profile-header {
		background-color: #2ecc71;
		padding: 50px 0;
	}

	.profile-name {
		font-size: 52px;
		font-weight: 900;
	}

	.profile-bio p{
		padding: 20px;
	}
</style>
@extends('layouts.admin')

@section('content')
	<div class="profile-header">
		<div class="">			
			<div class="center-block">	
				@if (file_exists($profile->photo))				
					<img src="{{ asset($profile->photo) }}" height="150px" class="img-responsive img-circle center-block" alt="Image">
				@else				
					<img src="http://placehold.it/150x150" height="150px" class="img-responsive img-circle center-block" alt="Image">
				@endif			
			</div>
			<h1 class="text-center profile-name">
				{{ strtoupper($profile->user->name) }}
				 <i class="fa fa-{{ $profile->gender }}"></i>
			</h1>
			<h5 class="text-center">
				@if (auth()->user()->id == $profile->user_id)
					<a class="btn btn-warning" href="{{ route('admin.profiles.edit', $profile->id) }}"><i class="fa fa-pencil"></i> Edit Your Profile</a>
				@endif

				<a class="btn btn-info" href="{{ route('admin.profiles.index') }}"><i class="fa fa-check"></i> View All Profiles</a>					
			</h5>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 profile-bio">
				<p>{{ $profile->bio }}</p>

				<hr>
				@if (isset($profiles))
					<div class="table-responsive">
						<table class="table table-hover table-condensed">
							<thead>
								<tr>
									<th>Name:</th>
									<th>Gender:</th>
									<th>Photo:</th>
									<th>Action:</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($profiles as $profile)
									<tr>
										<td>
											<a href="{{ route('admin.profiles.show', $profile->id) }}">{{ $profile->user->name }}</a>
										</td>
										<td>
											{{ ucwords($profile->gender) }}
										</td>
										<td class="col-xs-1">
											<img src="{{ asset($profile->photo) }}" class="img-responsive" alt="Image">
										</td>
										<td>
											@if (auth()->user()->id == $profile->user_id)
												<a href="{{ route('admin.profiles.edit', $profile->id) }}"><i class="fa fa-pencil"></i></a>
											@else
												<a href="{{ route('admin.profiles.show', $profile->id) }}"><i class="fa fa-check"></i></a>
											@endif
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{!! $profiles->render() !!}
				@endif
					
			</div>
		</div>
	</div>
@endsection

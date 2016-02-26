</ng-include>@extends('layouts.admin')

@section('content')

	<div class="container-fluid">
		<div class="col-sm-12">
			<h1>User Profile</h1>
		</div>
		<div class="col-sm-4 text-center">
			<div class="box box-primary pad">
				<div class="center-block ">	
					@if (file_exists($profile->photo))				
						<img src="{{ asset($profile->photo) }}" height="150px" class="img-responsive img-circle center-block profile-user-img animated rotateIn box-shadow" alt="Image">
					@else				
						<img src="http://placehold.it/150x150" height="150px" class="img-responsive img-circle center-block profile-user-img animated rotateIn box-shadow" alt="Image">
					@endif		
				</div>

				<h3>{{ $profile->user->name }}</h3>	
				<h4>{{ $profile->work }}</h4>	
				<h5><a href="mailto:{{ $profile->user->email }}"></a>{{ $profile->user->email }}</h5>	
				<h5>{{ $profile->phone }}</h5>	

				<div class="form-group">

					@if (auth()->user()->id == $profile->user_id)
						<a class="btn btn-warning" href="{{ route('admin.profiles.edit', $profile->id) }}">
							<i class="fa fa-pencil"></i>
							 Edit
						</a>
					@else
						<a href="{{ route('admin.profiles.show', auth()->user()->profile->id) }}">
							<i class="fa fa-check"></i>
							 Back to Your...
						</a>
					@endif
				</div>
			</div>

			<div class="box box-primary pad">

				<h3>About Me</h3>
				
				<hr>	
				<h4><i class="fa fa-book"></i> Education</h4>	
				<p>{!! $profile->education !!}</p>
				
				<hr>	
				<h4><i class="fa fa-pencil"></i> Skills</h4>
				
					@foreach ($profile->skillsObject as $skill)
						<span class="label label-info" style="margin: 0 3px;">
							{{ trim($skill) }} 
						</span> 
					@endforeach
				
				<hr>	
				<h4><i class="fa fa-book"></i> Work</h4>	
				<p>{!! $profile->work !!}</p>
				
				<hr>	
				<h4><i class="fa fa-location"></i> Location</h4>	
				<p>{!! $profile->location !!}</p>


			</div>
			
		</div>
		<div class="col-sm-8">
			<div class="box box-primary pad">		

				<h3>More About Me</h3>
				{{ $profile->bio }} 
			</div>
			
		</div>

		<div class="row">
			<div class="col-sm-12">
				<h3>Ohter Users Profiles</h3>
				<hr>
				@foreach ($profiles as $profile)
					<div class="col-sm-3">
						<div class="box box-warning pad">
							<div class="center-block ">	
								@if (file_exists($profile->photo))				
									<img src="{{ asset($profile->photo) }}" height="150px" class="img-responsive img-circle center-block profile-user-img animated rotateIn box-shadow" alt="Image">
								@else				
									<img src="http://placehold.it/150x150" height="150px" class="img-responsive img-circle center-block profile-user-img animated rotateIn box-shadow" alt="Image">
								@endif		
							</div>
							<h3>
								<a href="{{ route('admin.profiles.show', $profile->id) }}">{{ $profile->user->name }}</a>
								@if (auth()->user()->id == $profile->user_id)
									<a class="pull-right text-warning" href="{{ route('admin.profiles.edit', $profile->id) }}">
										<i class="fa fa-edit"></i>
									</a>
								@endif
							</h3>

							


						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	

	
@stop

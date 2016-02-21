@extends('layouts.admin')

@section('content')
	
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="well">
				<div class="row ">
					<div class=col-sm-12>
						{!! Form::model($image, ['route'=>['admin.images.update', $image->id], 'method'=>'PUT', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off", 'files'=>true]) !!}		
							<div class="form-group text-center">
								<legend>Edit Image {{ $image->name }} 
									<a href="{{ route('admin.images.index') }}" class="pull-right"><i class="fa fa-list"></i></a>
								</legend>
							</div>
	
							@include('images._form')
	
							<div class="form-group">							
								<button type="submit" class="btn btn-primary col-xs-6 col-xs-offset-1">Update</button>
								<button type="reset" class="btn btn-default col-xs-3 col-xs-offset-1">Cancel</button>
							</div>
	
							<div class="col-sm-4">
								<div class="form-group">
										
									<h4>Image Preview: </h4>
									<img src="{{ asset($image->path) }}" class="img-responsive" alt="Image">
								</div>
							</div>
							
	
						{!! Form::close() !!}

						<div class="col-sm-4">
								
								<div class="form-group">
									<form action="{{ route('admin.images.destroy', $image->id) }}" method="POST" class="" style="">
									    {!! csrf_field() !!}
									    {!! method_field('DELETE') !!}
									
									    <button type="submit" id="delete-image-{{ $image->id }}" class="btn btn-danger form-control" style="" name="deleteBtn">
									        
									        	<i class="fa fa-btn fa-remove"></i> Delete Image
									       
									    </button>
									</form>
								</div>
							</div>
					</div>

						
				</div>
			</div>
		</div>
	</div>
@endsection
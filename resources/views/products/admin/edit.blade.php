@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" >
			<div class="well">
				<div class="row">

					<div class="col-sm-12">
						{!! Form::model($product, ['route'=>['admin.products.update', $product->slug], 'method'=>'PUT', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off"]) !!}

							<div class="form-group text-center">
								<legend>Editing Product {{ ucwords($product->name) }}
									<a href="{{ route('admin.products.index') }}" class="pull-right"><i class="fa fa-list"></i></a>
								</legend>

									
							</div>				

							@include('products.admin._form')
			
							<div class="col-xs-12">	
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
							</div>
							{{-- {!! delete_button('admin.products.destroy', $product->id) !!} --}}						

						{!! Form::close() !!}					
							
						<div class="col-xs-12">
							<div class="form-group">
								{!! delete_button('admin.products.destroy', $product->slug, ['class'=>'btn btn-danger ', 'label'=>'Remove Product']) !!}
							</div>
						</div>
					</div>

				</div>

				<hr>
				<a href="{{ route('admin.products.index') }}">Back to Products List <i class="fa fa-arrow-circle-left"></i></a>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>
	$(document).ready(function() {
		$('#summary').summernote();
		$('#description').summernote();
	});
	</script>
@stop
@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
				<div class="well">
					<h2 class="page-header">Edit Images Associated to Products</h2>
					<h4><strong>Product Name: </strong>{{ $product->name }}</h4>

					@if (count($images) > 0)
						{!! Form::open(['route'=>['admin.products.update_images', $product->slug], 'method'=>'POST', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off"]) !!}
							<div class="row">	
									@foreach ($images as $image)
										<div class="col-xs-6 col-sm-4">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">
														<div class="checkbox">
															<label>
			
																{!! Form::checkbox('images_list[]', $image->id, in_array($image->id, $product->images_list->toArray())) !!}
																Checkbox
															</label>
														</div>

													</h3>
												</div>
												<div class="panel-body">
													<h5><strong>Name: </strong>{{ $image->name }}</h5>
													<img src="{{ asset($image->path) }}" class="img-responsive" alt="{{ $image->name }}">
												</div>
											</div>
										</div>
									@endforeach
							
							</div>	

							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Update Association</button>
										<button class="btn btn-default">Cancel</button>
									</div>
								</div>
							</div>
						{!! Form::close() !!}
					@else
						<h3 class="alert alert-info">
							No images added so far. To associate images with products please load some images.
						</h3>
					@endif

					<div class="row">
						<div class="col-sm-12">
							<a href="{{ route('admin.products.show', $product->slug) }}">Back to product details <i class="fa fa-arrow-circle-left"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
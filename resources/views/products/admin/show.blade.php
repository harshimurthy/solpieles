@extends('layouts.admin')

@section('content')

	<div class="row">
	
		<div class="col-sm-8 col-sm-offset-2">
			<div class="well">
				<h4 class="page-header text-center">
					Product {{ $product->name }}

				</h4>				
				<ul class="list-group">
					<li class="list-group-item">
						<h5><strong>Name: </strong>{{ $product->name }}</h5>
						<h5><strong>Slug: </strong>{{ $product->slug }}</h5>
						<h5><strong>Language: </strong>{{ $product->lang }}</h5>
						<div class="row">
							<div class="col-sm-12">
							<h3>Description: </h3>
								<p>{!! $product->description !!}</p>
							<h3>Specs: </h3>
								<p>{!! $product->specs !!}</p>
							</div>	
						</div>
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<ul class="nav navbar-nav">
									<li>
										<a href="{{ route('admin.products.index') }}"><i class="fa fa-list"></i> Back to List</a>
									</li>
									<li>
										<a href="{{ route('admin.products.edit', $product->slug) }}"><i class="fa fa-pencil"></i> Edit Product </a>
									</li>
									<li>
										<a href="{{ route('admin.products.edit_images', $product->slug) }}"><i class="fa fa-edit"></i> Edit Images </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="row">

							@if (count($product->images) > 0)
								@foreach ($product->images as $image)
									<div class="col-sm-4">
										<img src="{{ asset($image->path) }}" class="img-responsive" alt="{{ $image->name }}">
									</div>
								@endforeach
							@else
								<h3 class="alert alert-warning">No images added for this product</h3>
							@endif
						</div>
					</li>
					<hr>
					<h3 class="text-center">Product View</h3>
					@if (view()->exists('products.partials.'.$product->slug))
						@include('products.partials.'.$product->slug)
					@else

						<div class="alert alert-danger">
							<!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
							<h3> <strong>Missing View!</strong> Product {{ $product->name }} does not have a view created. Please create one.</h3>
						</div>
					@endif
				</ul>
			</div>
		</div>
	</div>
@endsection
@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="well">
					<h1 class="page-header">Image {{ $image->name }}</h1>
					
					<div class="col-sm-4">
						<img src="{{ asset($image->path) }}" class="img-responsive" alt="{{ $image->name }}">

						<ul class="nav navbar-nav">
							<li class="active">
								<a href="{{ route('admin.images.index') }}">
									<i class="fa fa-list"></i> List
								</a>
							</li>
							<li>
								<a href="{{ route('admin.images.edit', $image->id) }}">
									<i class="fa fa-edit"></i> Edit
								</a>
							</li>
						</ul>	
					</div>

					<div class="col-sm-8">
						<h3>Image Details</h3>

						<ul class="list-unstyled">
							<li><strong>Name: </strong>{{ $image->name }}</li>
							<li><strong>Size: </strong>{{ $image->size }} bytes</li>
							<li><strong>Tags: </strong>
								@foreach ($image->tagsObject as $tag)
									<a href=""><span class="label label-primary">{{ trim($tag) }}</span></a>
								@endforeach
							</li>
							<li><strong>Products: </strong>
								@if (count($image->products)>0)

									<h5>This image if associated to the following products:</h5>
									<ul class="">
										@foreach ($image->products as $product)
											<li>
												<a href="{{ route('admin.products.show', $product->slug) }}">{{ $product->name }}</a>
											</li>
										@endforeach
									</ul>

								@else

									<div class="alert alert-info">
										This image is not associated to any product yet.
									</div>

								@endif
							</li>

						</ul>
					</div>

					<div class="clearfix"></div>
			</div>
		</div>
	</div>
@stop
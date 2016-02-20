@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="well">
				<h1 class="page-header text-center">
					Images List 
					<a href="{{ route('admin.images.create') }}" title="Add Image">
						<i class="fa fa-plus"></i>
					</a>
				</h1>

				@if (count($images) > 0)
					<ul class="list-group">
						@foreach ($images as $image)
							<li class="list-group-item">
								<div class="row">
									<div class="col-sm-8">
										<strong>Image Name: </strong> <a href="{{ route('admin.images.show', $image->id) }}">{{ $image->name }}</a> <br>
										<strong>Tags: </strong>
											@foreach ($image->tags_array as $tag)
												<a href=""><span class="label label-info">{{ trim($tag) }}</span></a>
											@endforeach
											<br>
										<strong>Products: </strong> 
											@if (count($image->products) > 0)
												<ul>
													@foreach ($image->products as $product)
														<li><a href="{{ route('admin.products.show', $product->slug) }}">{{ $product->name }}</a></li>
													@endforeach
												</ul>
											@endif
										 <br>	
										 <a href="{{ route('admin.images.edit', $image->id) }}"><i class="fa fa-pencil"></i></a>
									</div>
									<div class="col-sm-4">
										<img src="{{ asset($image->path) }}" class="img-responsive" alt="{{ $image->name }}">
									</div>	
								</div>
							</li>
						@endforeach
					</ul>
					<div class="row">
						<div class="col-sm-12">
							{!! $images->render() !!}
						</div>
					</div>
				@endif
				
			</div>
		</div>
	</div>
@stop
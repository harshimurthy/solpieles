
@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">

			<div class="well">
				<h4 class="page-header text-center">Products 
					<a href="{{ route('admin.products.create') }}" title="Add Product"><i class="fa fa-plus"></i></a>
				</h4>
				@if (count($products) > 0)
					<ul class="list-group">
						@foreach ($products as $product)
							<li class="list-group-item">
								<h4><strong>Name: </strong> <a href="{{ route('admin.products.show', $product->slug) }}"> {{ $product->name }}</a></h4>
								<h4><strong>Slug: </strong> {{ $product->slug }}</h4>
								<h5><strong>Lang: </strong> {{ $product->lang }}</h5>
								<div class="row">
									<p class="col-sm-8 col-sm-offset-2">
										<a href="{{ route('admin.products.show', $product->slug) }}" class="pull-left"><i class="fa fa-eye"></i></a>
										<a href="{{ route('admin.products.edit', $product->slug) }}" class="pull-right text-warning"><i class="fa fa-edit"></i></a>
									</p>
								</div>
							</li>
						@endforeach
						<div class="row">
							<div class="col-sm-12">
								{!! $products->render() !!}
							</div>
						</div>
					</ul>
				@else
					<h5 class="text-center text-warning">No Products Saved!</h5>
				@endif
			</div>
		</div>
	</div>
	
@endsection





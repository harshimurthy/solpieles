
@extends('layouts.website', ['shrink'=>true])

@section('content')
	<div class="container margin-top">
		<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
			<div class="well">
	
				@if (count($products) > 0)
					<h2 class="page-header text-center">
						@if ($lang->lang == 'en')
							Products List.
						@else
							Lista de Productos. 
						@endif 		

						<a href="{{ route('admin.products.create') }}" title="Create Product">
							<i class="fa fa-plus"></i>
						</a>				
					</h2>
					<ul class="list-group">
						
						@foreach ($products as $product)
							<li class="list-group-item">
								<a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
							</li>
						@endforeach
					</ul>
						
				@else
					<div class="alert alert-default">
						<h1 class="text-center">
							@if ($lang->lang == 'en')
								No Products Saved! Come back later.
							@else
								No hay products salvados. Regrese mas tarde. 
							@endif 
						</h1>
					</div>
				@endif
				
				{!! $products->render() !!}
				@include('products.partials.breadcrumb')
			</div>
		</div>
	</div>
	
@endsection
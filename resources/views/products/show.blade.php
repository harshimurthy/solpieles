@extends('layouts.website')

@section('content')
	<div class="container margin-top">	
		@include('products.partials.breadcrumb')

		<h2>{{ $product->name }}</h2>
		<p class="item-intro text-muted">{{ $product->short_name }}</p>
		{{-- <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt=""> --}}		
		<div class="col-sm-6 col-sm-push-6">
			@if (count($product->images) > 0)
				<img src="{{ asset($product->images[0]->path) }}" class="img-responsive" alt="">
			@else
				<img src="{{ asset('images/main_page/raw-hides-machine.jpg') }}" class="img-responsive" alt="">
			@endif
			
		</div>				
		<div class="col-sm-6 col-sm-pull-6">
			<h4>Description</h4>
			<p>{!! $product->description !!}</p>

			<h4>Specs</h4>
			<strong>{{ $product->name }}</strong>
			<p>{!! $product->specs !!}</p>
		</div>
			
		
		@include('products.partials.breadcrumb')
	</div>

			<!-- Modal -->
			<div class="modal fade" id="productList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">
			        	@if ($lang->lang == 'en')
			        		Products List
			        	@else
			        		Lista de Productos 
			        	@endif 
			        </h4>
			      </div>
			      <div class="modal-body">
			        @if (count($products) >0)
			        	<ul class="list-group">
			        		@foreach ($products as $product)
			        			<li class="list-group-item"><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></li>			        			
				        	@endforeach
			        	</ul>

			        	{!! $products->render() !!}
			        @else
			        	<div class="alert alert-info">
			        		<strong>Title!</strong> Alert body ...
			        		@if ($lang->lang == 'en')
			        			<strong>No Products! </strong>We have not created any product in English. Perhaps you could try setting Spanish as your language!
			        		@else
			        			<strong>Sin Products! </strong>No hemos creado ningún producto en Español. Intente camiar al idioma Inglés para ver si hay productos en ese idioma!			        			 
			        		@endif 
			        	</div>
			        @endif
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>	
@endsection
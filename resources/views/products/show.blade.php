@extends('layouts.website')

@section('content')
	<div class="container margin-top">
		<div class="col-sm-4 col-sm-push-8">
			@include('products.partials.list', ['products'=>$products])			
		</div>
		<div class="col-sm-8 col-sm-pull-4">	
			@include('products.partials.'.$product, ['product'=>str_replace(["-","_"], " ", $product)])
		</div>
	</div>
@endsection
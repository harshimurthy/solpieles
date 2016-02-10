@inject('lang', 'App\Lang')
@extends('layouts.website')

@section('content')
	<div class="container margin-top">
		{{ var_dump($lang) }}
		<div class="col-sm-4 col-sm-push-8">
			@include('products.partials.list', ['products'=>$products])			
		</div>
		<div class="col-sm-8 col-sm-pull-4">	
			@include('products.partials.'.$sub_view, ['product'=>str_replace(["-","_"], " ", $sub_view)])
		</div>
	</div>
@endsection
@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="well">
				<h4 class="page-header text-center">
					Product {{ $product->name }}

				</h4>				<ul class="list-group">
					<li class="list-group-item">
						<h5><strong>Name: </strong>{{ $product->name }}</h5>
						<h5><strong>Slug: </strong>{{ $product->slug }}</h5>
						<h5><strong>Language: </strong>{{ $product->lang }}</h5>
						<div class="row">
							<div class="col-sm-12">
							<h5>Description: </h5>
								<p>{!! $product->description !!}</p>
							<h5>Specs: </h5>
								<p>{!! $product->specs !!}</p>
							</div>	
						</div>

						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<a href="{{ route('admin.products.index') }}" class="pull-left"><i class="fa fa-list"></i></a>
								<a href="{{ route('admin.products.edit', $product->slug) }}" class="pull-right text-warning"><i class="fa fa-pencil"></i></a>
							</div>
						</div>
					</li>
					<hr>
					<h4 class="text-center">Product View</h4>
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
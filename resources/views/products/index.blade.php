
@extends('layouts.website', ['shrink'=>true])

@section('content')
	<div class="container margin-top">
		<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
			<div class="well">
				
			@include('products.partials.list', ['products'=>$products])	
		</div>
	</div>
	
@endsection


@section('scripts')
<script> 
   
</script>
@endsection
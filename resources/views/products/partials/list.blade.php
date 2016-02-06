<h3 class="page-header text-center"><a href="{{ route('products.index') }}">Our List of Products</a></h3>
<ul>
	@foreach($products as $product)
		<li>
			<a href="{{ route('products.show', $product) }}">{{ ucfirst(str_replace(["_", "-"], " ", $product)) }}</a>
		</li>
	@endforeach	
</ul>	
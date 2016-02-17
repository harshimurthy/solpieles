
@if (count($products) > 0)
	<h3 class="page-header text-center">
		<a href="{{ route('products.index') }}">
			@if ($lang->lang == 'en')
				Our List of Products
			@else
				 Nuestra Lista de Productos
			@endif 
		</a>
	</h3>
	<ul>
		@foreach($products as $product)
			<li>
				{{-- <form action="{{ url('admin/products/'.$product->slug) }}" method="POST" class="" style="display: inline-block;">
				    {!! csrf_field() !!}
				    {!! method_field('DELETE') !!}
				
				    <button type="submit" id="delete-product-{{ $product->slug }}" class="btn btn-danger btn-link"  style="padding: 0; margin: 0 5px;"  name="deleteBtn">
				        <span class="text-danger">
				        	<i class="fa fa-btn fa-remove"></i>
				        </span>
				    </button>
				</form> --}}
				<a href="{{ route('products.show', $product->slug) }}">{{ ucfirst(str_replace(["_", "-"], " ", $product->slug)) }}</a>
			</li>
		@endforeach	
	</ul>	
@else
	<h4 class="text-center text-warning">
		@if ($lang->lang == 'en')
			No Producs Registered
		@else
			No Hay Productos Registrados 
		@endif 
	</h4>
@endif
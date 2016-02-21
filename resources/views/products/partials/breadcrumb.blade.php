

<div class="row">
	<div class="navbar">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li class="">
					<a href="{{ url('/#products') }}">
						<i class="fa fa-home"></i> 
						@if ($lang->lang == 'en')
							 Home-Products
						@else
							 Inicio-Productos 
						@endif 
					</a>
				</li>
				<li>
					<a data-toggle="modal" data-target="#productList">
						<i class="fa fa-list"></i> 
						@if ($lang->lang == 'en')
							 Products List
						@else
							 Lista de Productos 
						@endif 
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-details"></i>
						 @if ($lang->lang == 'en')
						 	Details
						 @else
						 	Detalles 
						 @endif
					</a>
				</li>
				@if (Auth::check())
					<li>
						<a href="{{ route('admin.products.create') }}" title="Create Product">
						<i class="fa fa-plus"></i>
						</a>
					</li>
				@endif
			</ul>
		</div>
	</div>
</div>
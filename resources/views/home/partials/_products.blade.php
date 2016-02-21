
		<section id="products" class="bg-light-gray">
			<div class="container">

				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">
							@if ($lang->lang == 'en')
								Our Products
							@else
								Nuestros Productos 
							@endif 
						</h2>
						<h3 class="section-subheading text-muted">
							@if ($lang->lang == 'en')
								We supply the best hides products for the leather industry.
							@else
								Somos suplidores de los mejores productos para la industria de la piel y cueros. 
							@endif 
						</h3>
					</div>
				</div>

				<div class="row">
					@if (count($products) > 0)
						@foreach ($products as $product)
							<div class="col-md-4 col-sm-6 products-item">
								<a href="{{ route('products.show', $product->slug) }}" class="products-link" data-toggle="modal">
									<div class="products-hover">
										<div class="products-hover-content">
											<i class="fa fa-plus fa-3x"></i>
										</div>
									</div>
									@if (count($product->images) > 0)
										<img src="{{ asset($product->images[0]->path) }}" class="img-responsive" alt="">
									@else
										<img src="{{ asset('images/main_page/raw-hides-machine.jpg') }}" class="img-responsive" alt="">
									@endif
									
								</a>
								<div class="products-caption">
									<h4>{{ $product->name }}</h4>
									<p class="text-muted">{{ $product->short_name }}</p>
								</div>
							</div>
						@endforeach

					@endif
				</div>
					


				<div class="row">
					<div class="text-center">
						<a href="{{ route('products.index') }}" class="btn btn-primary">
							@if ($lang->lang == 'en')
								More About Our Products 
							@else
								Más Sobre Nuestros Productos
							@endif 
							<i class="fa fa-angle-double-right"></i>
						</a>
					</div>
				</div>
			</div>
		</section>
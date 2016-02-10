
		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">
							@if ($lang->lang == 'en')
								Services
							@else
								Servicios 
							@endif 
						</h2>
						<h3 class="section-subheading text-muted">
							@if ($lang->lang == 'en')
								Personalized services, satisfaction guaranteed.
							@else
								Servicios personalidados, satisfacción garantizada. 
							@endif 
						</h3>
					</div>
				</div>
				
				<div class="row text-center">
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-plane fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">
							@if ($lang->lang == 'en')
								Imports
							@else
								 Importaciones
							@endif 
						</h4>
						<p class="text-muted">
							@if ($lang->lang == 'en')
								We help you handle <a class="page-scroll" href="#portfolio">Wet Blue Hides</a> and <a class="page-scroll" href="#portfolio">Raw Salted Hides</a> imports from basically any country to the <b>Dominican Republic</b>.
							@else
								Te ayudamos a importar <a class="page-scroll" href="#portfolio">cueros Wet Blue</a> y <a class="page-scroll" href="#portfolio">cueros Crudos Salados </a> desde cualquier parte del mundo hacia <b>República Dominicana</b>. 
							@endif 
						</p>
						{{-- <p class="text center"><a class="page-scroll" href="" class="btn btn-primary">Details</a></p> --}}
					</div>
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-ship fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">
							@if ($lang->lang == 'en')
								Exports
							@else
								Exportaciones 
							@endif 
						</h4>
						<p class="text-muted">
							@if ($lang->lang == 'en')
								We deliver our <a class="page-scroll" href="#portfolio">Wet Blue Hides</a> and <a class="page-scroll" href="#portfolio">Raw Salted Hides</a> to any country in a timely record, with no complications.
							@else
								 Enviamos nuestros  <a class="page-scroll" href="#portfolio">cueros Wet Blue</a> y <a class="page-scroll" href="#portfolio">cueros Crudos Salados</a> hacia cualquier país en tiempo records.
							@endif 
						</p>
						{{-- <p class="text center"><a class="page-scroll" href="" class="btn btn-primary">Details</a></p> --}}
					</div>
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-truck fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">
							@if ($lang->lang == 'en')
								Delivery
							@else
								Envíos Internos 
							@endif 
						</h4>
						<p class="text-muted">
							@if ($lang->lang == 'en')
								We deliver our <a class="page-scroll" href="#portfolio">Wet Blue Hides</a> and <a class="page-scroll" href="#portfolio">Raw Salted Hides</a> to any city or company located in Dominican Republic. Just give us a call.
							@else
								Suplimos el mercado interno, enviando nuestros <a class="page-scroll" href="#portfolio">cueros Wet Blue</a> y <a class="page-scroll" href="#portfolio">cueros Crudos Salados</a> desde y hacia cualquier ciudad en <u>República Dominicana</u>. 
							@endif 
						</p>
						{{-- <p class="text center"><a class="page-scroll" href="" class="btn btn-primary">Details</a></p> --}}
					</div>
				</div>

				<div class="row text-center">
					<a href="{{ route('services') }}" class="btn btn-primary">
						@if ($lang->lang == 'en')
							More About Services 
						@else
							Más sobre servicios 
						@endif 
						<i class="fa fa-angle-double-right"></i>
					</a>
				</div>

				<hr>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading"><h4>
								@if ($lang->lang == 'en')
									Experts fulfilling the following documents
								@else
									Expertos completando los siguientes formularios: 
								@endif 
							</h4></div>
								<!-- Table -->
								<table class="table table-condensed table-hover">
									<thead>
										<tr><th>Heading 1</th>
										</tr>

										<tr><th>Heading 2</th>
										</tr>

										<tr><th>Heading 3</th>
										</tr>

									</thead>
								</table>
						</div>
					</div>
				</div>
			</div>
		</section>
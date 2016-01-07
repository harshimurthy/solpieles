
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Contáctenos </h2>
						<h3 class="section-subheading text-muted">Déjenos un mensaje o contáctenos a través de otras vías. </h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-push-8 well">
					    @if (Session::get('lang') == 'es')
					    	@include('website-es._contact-info')
					    @else
					    	@include('website._contact-info')
					    @endif
					</div>
					<div class="col-md-8 col-md-pull-4">
						{!! Form::open(['route'=>['admin.messages.store'], 'method'=>'POST', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off", 'novalidate'=>'novalidate', 'id'=>'contactForm']) !!}		
								
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="subject" id="subject" class="form-control" required="required">
											<option value="your products">Productos</option>
											<option value="your services">Servicios</option>
											<option value="your business">Hacer Negocios</option>
											<option value="general topics">Otros Temas</option>
										</select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required data-validation-required-message="Favor introducir su nombre.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="Introduzca su email.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone" required data-validation-required-message="Introduzca su teléfono.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" placeholder="Mensage *" name="message" id="message" required data-validation-required-message="Introduzca su mensaje." rows="16"></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn btn-xl">Enviar Mensaje</button>
								</div>
							</div>
						
							{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
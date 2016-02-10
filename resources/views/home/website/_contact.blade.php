
<?php 
	$lang = \Session::get('lang', 'en');
	$messages = (object)[
		'name'=>(object)[
			'en'=>'Please enter your name.',
			'es'=>'Por favor digite su nombre.',
		],
		'email'=>(object)[
			'en'=>'Please enter your email address.',
			'en'=>'Por favor digite si email',
		],
		'phone'=>(object)[
			'en'=>'Please enter your phone number.',
			'en'=>'Por favor digite si teléfono',
		],
		'message'=>(object)[
			'en'=>'Please enter a message.',
			'en'=>'Por favor digite su mensaje.',
		]
	];
 ?>
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">
							@if ($lang == 'en')
								Contact Us
							@else
								Contáctenos  
							@endif 
						</h2>
						<h3 class="section-subheading text-muted">
							@if ($lang == 'en')
								Get in contact with us. We will respond.
							@else
								 Déjenos un mensaje o contáctenos a través de otras vías. 
							@endif 
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-push-8 well">
					    @include('home.website._contact-info')
					</div>
					<div class="col-md-8 col-md-pull-4">
						{!! Form::open(['route'=>['admin.messages.store'], 'method'=>'POST', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off", 'novalidate'=>'novalidate', 'id'=>'contactForm']) !!}		
								
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select name="subject" id="subject" class="form-control" required="required">
											<option value="your products">
												@if ($lang == 'en')
													Your Products
												@else
													Sus Productos 
												@endif 
											</option>
											<option value="your services">
												@if ($lang == 'en')
													Your Services
												@else
													Sus Servicios 
												@endif 
											</option>
											<option value="your business">
												@if ($lang == 'en')
													Doing Business
												@else
													Hacer Negocios 
												@endif 
											</option>
											<option value="general topics">
												@if ($lang == 'en')
													General Topics
												@else
													Otros Temas 
												@endif 
											</option>
										</select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required data-validation-required-message="{{ $messages->name->$lang }}">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="{{ $messages->email->$lang }}">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone" required data-validation-required-message="{{ $messages->phone->$lang }}">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" name="message" id="message" required data-validation-required-message="{{ $messages->message->$lang }}" rows="16"></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn btn-xl">
										@if ($lang == 'en')
											Send Message
										@else
											 Enviar Mensaje
										@endif 
									</button>
								</div>
							</div>
						
							{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
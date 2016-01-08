
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Contact Us</h2>
						<h3 class="section-subheading text-muted">Get in contact with us. We will respond.</h3>
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
											<option value="your products">Your Products</option>
											<option value="your services">Your Services</option>
											<option value="your business">Doing Business Together</option>
											<option value="general topics">General Topics</option>
										</select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" name="message" id="message" required data-validation-required-message="Please enter a message." rows="16"></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn btn-xl">Send Message</button>
								</div>
							</div>
						
							{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
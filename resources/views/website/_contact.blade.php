
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
					    {{-- <img class="img-circle img-responsive img-center" src="https://images.unsplash.com/photo-1431910078401-c3f7e61b1d5c?q=80&fm=jpg&s=bc04cdb20a18b6b037858b9a87f36d75" alt="" width="70%"> --}}
					    {{-- <hr> --}}
					    <h3>Sol Pieles, SRL</h3>
					    <p>
					        Calle # 3, Residential Lily, Apt. 4-C<br>Santiago, Dominican Republic<br>
					    </p>
					    <p><i class="fa fa-phone"></i> 
					        <abbr title="Phone">P</abbr>: 1+(809) 867 9170</p>
					        <abbr title="Phone 2">P</abbr>: 1+(809) 850 2371</p>
					        <abbr title="Phone 2">P</abbr>: 1+(809) 724 4683</p>
					        <abbr title="Fax">F</abbr>: 1+(809) 724 3939</p>
					    <p><i class="fa fa-envelope-o"></i> 
					        <abbr title="Email">E</abbr>: 
					        <a href="mailto:cperchaz@hotmail.com" target="_new">cperchaz@hotmail.com</a>
					    </p>
					    <p><i class="fa fa-clock-o"></i> 
					        <abbr title="Hours">H</abbr>: Every day, 24 / 7</p>
					        {{-- <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p> --}}
					    <ul class="list-unstyled list-inline list-social-icons">
					        <li>
					            <a href="https://www.facebook.com/yismen.jorge32" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
					        </li>
					        <li>
					            <a href="https://twitter.com/@Yismen" target="_blank"><i class="fa fa-skype fa-2x"></i></a>
					        </li>
					        <li>
					            <a href="https://twitter.com/@Yismen" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>
					        </li>
					        <li>
					            <a href="https://twitter.com/@Yismen" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>
					        </li>
					    </ul>
					    {{-- <a href="{{ route('faq') }}">Frequently Asked Questions</a> --}}
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
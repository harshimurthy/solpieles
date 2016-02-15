
		<section id="team" class="bg-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">
							@if ($lang->lang == 'en')
								Be Part of Our Team
							@else
								Nuestro Grandioso Equipo 
							@endif 
						</h2>
						<h3 class="section-subheading text-muted">
							@if ($lang->lang == 'en')
								Our clients are our partners. 
							@else
								Tú eres parte de nosotros.  
							@endif 
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="team-member">
							<img src="{{ asset('images/team/carlos-perez.jpg') }}" class="img-responsive  img-circle" alt="">
							<h4>Carlos Perez</h4>
							<p class="text-muted">CEO and Operations Manager</p>
							<ul class="list-inline social-buttons">
								<li><a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li><a href="https://www.facebook.com/carlosrafael.perezchavez"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="team-member">
							<img src="{{ asset('images/team/rosa-castillo.jpg') }}" class="img-responsive  img-circle" alt="">
							<h4>Rosa de Perez</h4>
							<p class="text-muted">Lead Marketer and Tactic Operations</p>
							<ul class="list-inline social-buttons">
								<li><a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li><a href="https://www.facebook.com/rosa.castillo"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<p class="large text-muted">
							@if ($lang->lang == 'en')
								We are goald oriented team, focused on your satisfaction, providing products and services that will help your business to succeed.
							@else
								Ofrecemos un equipo altamente orientados al logro de objetivos, enfoncados en la satisfacción y éxitos de nuestros clientes, a través de un servicio personalizado a cualquier hora, cualquier día. 
							@endif 
						</p>
					</div>
				</div>
			</div>
		</section>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <meta name="description" content="Sol Pieles SRL">
    <meta name="author" content="Yismen Jorge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Sit Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/solpieles.ico') }}">

	<title>Sol Pieles SRL Main Page</title>

	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('assets/plugins/startrap-agency/less/agency.css') }}" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top" class="index"  ng-app="APP">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
	{{-- <nav class="navbar navbar-default navbar-fixed-top"> --}}
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				{{-- <a class="navbar-brand page-scroll" href="#page-top">Sol Pieles</a> --}}
				<a class="navbar-brand page-scroll" href="#page-top">
					<img src="{{ asset('images/solpieles.png') }}" class="img-responsives pull-left" height="30px" alt="Image">
					 <span class="pull-right">
					 	Sol Pieles - 
					 	<small><i class="fa fa-phone"> </i> 809 867 9170</small>
					 </span>
				</a>
			</div>


			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#services">Services</a>
					</li>
					<li>
						<a class="page-scroll" href="#portfolio">Products</a>
					</li>
					<li>
						<a class="page-scroll" href="#about">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#team">Team</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	{{-- Main Wrapper --}}
	<div class="wrapper">
		<!-- Header -->
		<header>
			<div class="blurs">
				<div class="container">
					<div class="intro-text">
						<div class="intro-lead-in">We deliver quality!</div>
						<div class="intro-heading">SOL Pieles, SRL</div>
						<a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
					</div>
				</div>
			</div>
		</header>

		<!-- Services Section -->
		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Services</h2>
						<h3 class="section-subheading text-muted">Personalized services, satisfaction guaranteed.</h3>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-plane fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">Imports</h4>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
						<p class="text center"><a href="" class="btn btn-primary">Details</a></p>
					</div>
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-ship fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">Exports</h4>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
						<p class="text center"><a href="" class="btn btn-primary">Details</a></p>
					</div>
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-truck fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">Delivery</h4>
						<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
						<p class="text center"><a href="" class="btn btn-primary">Details</a></p>
					</div>
				</div>
			</div>
		</section>

		<!-- Portfolio Grid Section -->
		<section id="portfolio" class="bg-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Products</h2>
						<h3 class="section-subheading text-muted">We supply the best hides products for the leather industry.</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="{{ asset('images/main_page/raw-hides-machine.jpg') }}" class="img-responsive" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>Raw Hides 100% Machine</h4>
							<p class="text-muted">Website Design</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="{{ asset('images/main_page/raw-hides-70-30.jpg') }}" class="img-responsive" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>Raw Hides 70% Mahine</h4>
							<p class="text-muted">Website Design</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="{{ asset('images/main_page/raw-hides-knifes.jpg') }}" class="img-responsive" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>Raw Hides 100% Knifes</h4>
							<p class="text-muted">Website Design</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							{{-- </div>"F:\wamp\www\solpieles\public\images\main_page\wet-blue.jpg" --}}
							<img src="{{ asset('images/main_page/wet-blue.jpg') }}" class="img-responsive" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>Wet Blue Hides</h4>
							<p class="text-muted">Graphic Design</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="{{ asset('images/main_page/split-wet-blue.jpg') }}" class="img-responsive" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>Spli Wet Blue</h4>
							<p class="text-muted">Website Design</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<img src="{{ asset('images/main_page/belly-split-wet-blue.jpg') }}" class="img-responsive" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>Belly Split Wet Blue</h4>
							<p class="text-muted">Website Design</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>


		<!-- About Section -->
		{{-- <section id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">About</h2>
						<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<ul class="timeline">
							<li>
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>2009-2011</h4>
										<h4 class="subheading">Our Humble Beginnings</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>March 2011</h4>
										<h4 class="subheading">An Agency is Born</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>December 2012</h4>
										<h4 class="subheading">Transition to Full Service</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>July 2014</h4>
										<h4 class="subheading">Phase Two Expansion</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted">
								<div class="timeline-image">
									<h4>Be Part
										<br>Of Our
										<br>Story!</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section> --}}
		<section id="about">
			<div class="container">
				<div class="row">
		            <div class="col-md-4 ">
		            	<span class="text-centers">            		
			                <img class="img-responsive img-centered" src="{{ asset('images/solpieles.png') }}" alt="">
		            	</span>
		            </div>
		            <div class="col-md-8">
		                <h2 class="section-heading">About SOL Pieles, SRL</h2>
						<h3 class="section-subheading text-muted">Our clients are our partners. </h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
		            </div>
		        </div>
		    </div>
		</section>

		<!-- Team Section -->
		<section id="team" class="bg-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Be Part of Our Team</h2>
						<h3 class="section-subheading text-muted">Our clients are our partners. </h3>
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
								<li><a href="#"><i class="fa fa-facebook"></i></a>
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
								<li><a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Clients Aside -->
		{{-- <aside class="clients">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<a href="#">
							<img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
						</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<a href="#">
							<img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
						</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<a href="#">
							<img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
						</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<a href="#">
							<img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
						</a>
					</div>
				</div>
			</div>
		</aside> --}}
		
		<!-- Contact Section -->
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

		{{-- Google Map Section --}}
		<div id="map">
			<iframe src="https://www.google.com/maps/d/embed?mid=zN5RxWZp6IA4.kW2mxCq8YvOc" frameborder="0" style="border:0" width="100%" height="480"></iframe>
		</div>


		<!-- Portfolio Modals -->
		<!-- Use the modals below to showcase details about your portfolio projects! -->

		<!-- Portfolio Modal 1 -->
		<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2>100% Machine Flayed Wet Salted Hides</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
								{{-- <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt=""> --}}					
								<div class="col-sm-6">
									<h4>Description</h4>
									<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
									<p>
									<h4>Specs</h4>
									<strong>100% Machine Flayed Wet Salted Hides</strong>
									<ul class="list-unstyled">
										<li><strong>Holes: </strong>0-1</li>
										<li><strong>Ave. Weight: </strong>24 kgs/pc</li>
										<li><strong>Minimum. Weight: </strong>20 kgs/pc</li>
										<li><strong>Maximum. Weight: </strong>35 kgs/pc</li>
										<li><strong>Average Size: </strong>42 Sqrft</li>
										<li><strong>Type of Animals: </strong>80% European-American Breed, 20% Zebuinas</li>
										<li>70% Males</li>
										<li>70% Females</li>
										<li>Just 5% Small Humps</li>
										<li>Some Ticks on the Belly</li>
										<li><strong>Salting Time: </strong>Minimum 15 days</li>
										<li><strong>Capacity: </strong>8 ontainers/month</li>
									</ul>
								</div>
								<div class="col-sm-6">
									<img src="{{ asset('images/main_page/raw-hides-machine.jpg') }}" class="img-responsive" alt="">
								</div>		
								<div class="row">
									
									<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Product Details</button>
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Portfolio Modal 2 -->
		<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="modal-body">
								<h2>Project Heading</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
								<p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
								<p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
								<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Portfolio Modal 3 -->
		<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2>Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
								<p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
								<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
								<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Portfolio Modal 4 -->
		<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2>Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
								<p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
								<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
								<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Portfolio Modal 5 -->
		<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2>Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
								<p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
								<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
								<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Portfolio Modal 6 -->
		<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="modal-body">
								<!-- Project Details Go Here -->
								<h2>Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
								<img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
								<p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
								<p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
								<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	{{-- / Wrapper --}}

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<span class="copyright">Copyright &copy; Solpieles, SRL - {{ date("Y") }}</span>
				</div>
				<div class="col-md-4">
					<ul class="list-inline social-buttons">
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="list-inline quicklinks">
						<li><a href="{{ url('admin') }}">Admin</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- Plugin JavaScript -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="{{ asset('assets/plugins/startrap-agency/js/classie.js') }}"></script>
	<script src="{{ asset('assets/plugins/startrap-agency/js/cbpAnimatedHeader.js') }}"></script>

	<!-- Contact Form JavaScript -->
	<script src="{{ asset('assets/plugins/startrap-agency/js/jqBootstrapValidation.js') }}"></script>
	<script src="{{ asset('assets/plugins/startrap-agency/js/contact_me.js') }}"></script>

	<!-- Custom Theme JavaScript -->
	<script src="{{ asset('assets/plugins/startrap-agency/js/agency.js') }}"></script>

	{{-- AngularJs Dependencies --}}
	{{-- <script src="{{ asset('assets/plugins/angular-1.4.3/angular.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/plugins/angular-1.4.3/angular-route.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/plugins/angular-1.4.3/angular-animate.min.js') }}"></script> --}}
	
	{{-- Angular App Dependencies --}}
	{{-- <script src="{{ asset('assets/angular-app/app.js') }}"></script> --}}

	{{-- Controllers --}}
	{{-- <script src="{{ asset('assets/angular-app/controllers/HomeCtrl.js') }}"></script> --}}

	{{-- Services --}}

</body>

</html>

@extends('layouts.website')

<?php $shrink = 'navbar-shrink' ?>
@section('content')
	
	<section>
		<div class="container">
			<div class="row">
				<h2 class="section-heading">Nuestros Servicios</h2>
				<ol class="breadcrumb">
					<li>
						<a href="{{ route('site.route') }}">Home</a>
					</li>
					<li class="active">Services</li>
				</ol>
			</div>

			<div class="col-md-6">
	            <div class="col-lg-12">
	                <img class="img-responsive" src="http://placehold.it/1200x600" alt="">
	            </div>
	        </div>
			<hr>
			<div class="col-md-6">		
				<div class="col-lg-12">

	                <ul id="myTab" class="nav nav-tabs nav-justified">
	                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-plane"></i> Imports</a>
	                    </li>
	                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-ship"></i> Exports</a>
	                    </li>
	                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-truck"></i> Delivery</a>
	                    </li>
	                </ul>

	                <div id="myTabContent" class="tab-content">
	                    <div class="tab-pane fade active in" id="service-one">
	                        <h4>Imports</h4>
	                        <p>Using our great localization we can help you to import <a href="{{ url('/#portfolio') }}">Wet Blue Hides</a> and <a href="{{ url('/#portfolio') }}">Raw Salted Hides</a> from every tactic point in latin america.</p>
	                       
	                    </div>
	                    <div class="tab-pane fade" id="service-two">
	                        <h4>Exports</h4>
	                        <p>We deliver our products to any country in a timely record, with no complications. We just provide the best <a href="{{ url('/#portfolio') }}">Wet Blue Hides</a> and <a href="{{ url('/#portfolio') }}">Raw Salted Hides</a> available. </p>
	                        <p>Our service is personalized. We make sure you just get the best products, no tricks.</p>
	                    </div>
	                    <div class="tab-pane fade" id="service-three">
	                        <h4>Delivery</h4>
	                        <p>We deliver our <a href="{{ url('/#portfolio') }}">Wet Blue Hides</a> and <a href="{{ url('/#portfolio') }}">Raw Salted Hides</a> to any city or company located in Dominican Republic. Just give us a call. We can help your business to succeed.</p>
	                    </div>

	            </div>
			</div>
		</div>
	</section>
@endsection
<?php $lang = \Session::get('lang', 'en') ?>
		<section id="about">
			<div class="container">
				<div class="row">
		            <div class="col-md-4 ">
		            	<span class="center-block">            		
			                <img class="img-responsive img-centered" src="{{ asset('images/solpieles.png') }}" alt="Raw Hides and Wet Blue" title="Raw Hides and Wet Blue">
		            	</span>
		            </div>
		            <div class="col-md-8">
		                <h2 class="section-heading">
		                	SOL Pieles, SRL
		                </h2>
						<h3 class="section-subheading text-muted">			

		                	@if ($lang == 'en')
		                		Our clients are our partners.
		                	@else
		                		Suplidores de cueros salados y wet blue. 
		                	@endif 
						</h3>
		                
		                <p>
		                	@if ($lang == 'en')			                		
			                	We supply the Tanning Industry with high quality products and services, all around the world. We offer Reliability, Honesty and Excellent Dealing Conditions and Facilities as the result of over 15 years of experience in <b>WET BLUE</b> and <b>RAW HIDES</b> Business.
		                	@else
		                		Suplimos la industria procesadora de pieles con productos y servicios de alta calidad en cualquier parte del mundo. Nuestros principales productos son la confiabilidad, honestidad y la excelencia en nuestros tratos, como resultado de más de 15 años de experiencia en el negocio de los <b>Cueros WET BLUE</b> y <b>CUEROS SALADOS CRUDOS</b>.
		                	@endif 
		                </p>
		                
		                <p class="text-muted">
		                	@if ($lang == 'en')
		                		What are our mission and vision? Keywords: <i>Raw Hides and Wet Blue, Dominican Republic</i>
		                	@else
		                		What are our mission and vision? Keywords: <i>Raw Hides and Wet Blue, Dominican Republic</i> 
		                	@endif 
		                </p>
		                
		                <p class="text-muted">
		                	@if ($lang == 'en')
		                		Whats Our main streng? Keywords: <u>Raw Hides and Wet Blue, Dominican Republic</u>
		                	@else
		                		Whats Our main streng? Keywords: <u>Raw Hides and Wet Blue, Dominican Republic</u> 
		                	@endif 
		                </p>
		                
		                <p class="text-muted">
		                	@if ($lang == 'en')
		                		Whats our target market? <h3>Raw Hides and Wet Blue, Dominican Republic</h3>
		                	@else
		                		Whats our target market? <h3>Raw Hides and Wet Blue, Dominican Republic, Santiago</h3>
		                	@endif 
		                </p>
		                
		            </div>
		        </div>
		    </div>
		</section>
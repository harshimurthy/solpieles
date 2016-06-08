<section id="section-map">
	<div class="row">
		<div class="col-sm-9">
			
				<div id="map">
					<iframe src="https://www.google.com/maps/d/embed?mid=zN5RxWZp6IA4.kW2mxCq8YvOc" width="100%" height="480"></iframe>
				</div>
		</div>

		<div class="col-sm-3">
            <h2 class="section-heading">
            	@if ($lang->lang == 'en')
            		Location!
            	@else
            		Localización! 
            	@endif 
            </h2>
			<h3 class="section-subheading text-muted">
				@if ($lang->lang == 'en')
					Well Located 
				@else
					 Posición Estratégica 
				@endif 
			</h3>
			<p>
				@if ($lang->lang == 'en')
					We are positioned in the great city of <b>Santiago, Dominican Republic</b>, right at the center of the Caribbean, which give us access to a variety of markets. We can eassily supply from/to Argentina, Venezuela, Mexico, Canada, USA, India, China.
				@else
					<p>Estamos posicionanos en la ciudad de <b>Santiago, República Dominicana</b>, justo en el centro del Caribe, lo cual nos da fácil acceso a una gran variedad de mercados. Podemos fácilmente suplir desde/hacia Argentina, Venezuela, Mexico, Canada, USA, India, China. 
				@endif 
			</p>
		</div>
	</section>
</div>
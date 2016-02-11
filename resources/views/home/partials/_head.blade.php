	{{-- {{ dd($lang) }} --}}
		<!-- Header -->
		<header>
			<div class="blur">
				<div class="container">
					<div class="intro-text">
						<div class="intro-lead-in">
							@if ($lang->getLang() == 'en')
								We deliver quality!
							@else
								Nuestro compromiso es la calidad!
							@endif 
						</div>
						<h1 class="intro-heading">
							@if ($lang->getLang()== 'en')
								Best Salted Raw Hides and Wet Blue Hides
							@else
								 Los mejores Cueros Salados y Cueros Wet Blue
							@endif 
						</h1>
						<a href="{{ url('#services') }}" class="page-scroll btn btn-xl">
							@if ($lang->getLang()== 'en')
								Tell me more
							@else
								Dime más  
							@endif 
							<i class="fa fa-angle-double-down"></i>
						</a>
					</div>
				</div>
			</div>
		</header>
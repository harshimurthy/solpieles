<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<span class="copyright">Copyright &copy; Solpieles, SRL - {{ date("Y") }}</span>
				</div>
				<div class="col-md-4">
					<ul class="list-inline social-buttons">
						<li>@include('layouts.partials-website.social-links.twitter')
						</li>
						<li>@include('layouts.partials-website.social-links.facebook')
						</li>
						<li>@include('layouts.partials-website.social-links.email')
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="list-inline quicklinks">
						<li><a href="{{ route('admin.home') }}">Admin</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

<div class="col-lg-3 col-md-4 col-sm-6 {{ $class }} minibox">
	<div class="panel panel-primary">
	  <div class="panel-heading">
			<h1 class="panel-title text-center">{{ $title }}</h1>
	  </div>
	  <div class="panel-body">
			{{ $description }}
	  </div>

	  <div class="panel-footer">
	  	<a href="{{ route($route) }}">{{ $routeText }}</a>
	  </div>
	</div>
</div>

	
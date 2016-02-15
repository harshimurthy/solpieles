@inject('lang', 'App\Lang')
@inject('singlePage', 'App\Layout')
@extends('layouts.website')

@section('content')
	{{-- Main Wrapper --}}
	<div class="wrapper">

				@include('home.partials._head')

				<!-- Services Section -->
				@include('home.partials._services')

				<!-- Portfolio Grid Section -->
				@include('home.partials._portfolio')


				<!-- About Section -->
				@include('home.partials._timeline')

				@include('home.partials._about')

				<!-- Team Section -->
				@include('home.partials._team')

				<!-- Clients Aside -->
				@include('home.partials._clients')
				
				<!-- Contact Section -->
				@include('home.partials._contact')

				{{-- Gogle Map Section --}}
				@include('home.partials._map')


				<!-- Portfolio Modals -->
				<!-- Use the modals below to showcase details about your portfolio projects! -->
				@include('home.partials._modals')


	</div>
	{{-- / Wrapper --}}

	
@stop
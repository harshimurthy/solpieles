@inject('lang', 'App\Lang')
@extends('layouts.website')

@section('content')
	{{-- Main Wrapper --}}
	<div class="wrapper">

			@if (\Session::get('lang') == 'es')
				@include('home.website-es._head')

				<!-- Services Section -->
				@include('home.website-es._services')

				<!-- Portfolio Grid Section -->
				@include('home.website-es._portfolio')


				<!-- About Section -->
				@include('home.website-es._timeline')

				@include('home.website-es._about')

				<!-- Team Section -->
				@include('home.website-es._team')

				<!-- Clients Aside -->
				@include('home.website-es._clients')
				
				<!-- Contact Section -->
				@include('home.website-es._contact')

				{{-- Gogle Map Section --}}
				@include('home.website-es._map')


				<!-- Portfolio Modals -->
				<!-- Use the modals below to showcase details about your portfolio projects! -->
				@include('home.website-es._modals')
			@else
				@include('home.website._head')

				<!-- Services Section -->
				@include('home.website._services')

				<!-- Portfolio Grid Section -->
				@include('home.website._portfolio')


				<!-- About Section -->
				@include('home.website._timeline')

				@include('home.website._about')

				<!-- Team Section -->
				@include('home.website._team')

				<!-- Clients Aside -->
				@include('home.website._clients')
				
				<!-- Contact Section -->
				@include('home.website._contact')

				{{-- Gogle Map Section --}}
				@include('home.website._map')


				<!-- Portfolio Modals -->
				<!-- Use the modals below to showcase details about your portfolio projects! -->
				@include('home.website._modals')
			@endif

	</div>
	{{-- / Wrapper --}}

	
@endsection
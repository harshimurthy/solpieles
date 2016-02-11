@inject('lang', 'App\Lang')
@inject('singlePage', 'App\Layout')
@extends('layouts.website')

@section('content')
	{{-- Main Wrapper --}}
	<div class="wrapper">

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


	</div>
	{{-- / Wrapper --}}

	
@endsection
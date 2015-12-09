@extends('layouts.website')

@section('content')
	{{-- Main Wrapper --}}
	<div class="wrapper">

		@include('website._head')

		<!-- Services Section -->
		@include('website._services')

		<!-- Portfolio Grid Section -->
		@include('website._portfolio')


		<!-- About Section -->
		@include('website._timeline')

		@include('website._about')

		<!-- Team Section -->
		@include('website._team')

		<!-- Clients Aside -->
		@include('website._clients')
		
		<!-- Contact Section -->
		@include('website._contact')

		{{-- Gogle Map Section --}}
		@include('website._map')


		<!-- Portfolio Modals -->
		<!-- Use the modals below to showcase details about your portfolio projects! -->
		@include('website._modals')

	</div>
	{{-- / Wrapper --}}

	
@endsection
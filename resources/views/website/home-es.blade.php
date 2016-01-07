@extends('layouts.website')

@section('content')
	{{-- Main Wrapper --}}
	<div class="wrapper">

		@include('website-es._head')

		<!-- Services Section -->
		@include('website-es._services')

		<!-- Portfolio Grid Section -->
		@include('website-es._portfolio')


		<!-- About Section -->
		@include('website-es._timeline')

		@include('website-es._about')

		<!-- Team Section -->
		@include('website-es._team')

		<!-- Clients Aside -->
		@include('website-es._clients')
		
		<!-- Contact Section -->
		@include('website-es._contact')

		{{-- Gogle Map Section --}}
		@include('website-es._map')


		<!-- Portfolio Modals -->
		<!-- Use the modals below to showcase details about your portfolio projects! -->
		@include('website-es._modals')

	</div>
	{{-- / Wrapper --}}

	
@endsection
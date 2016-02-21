@inject('lang', 'App\Lang')
@inject('singlePage', 'App\Layout')
@include('layouts.partials-website.header')
<!-- /. Header -->
<body id="page-top">   
    {{-- @include('layouts.partials.messages') --}}
  
  @include('layouts.partials-website.navbar')


    {{-- {!! Toastr::render() !!}  --}} 
    <div class="{{ isset($shrink) ? 'margin-top' : '' }}">
      @include('layouts.partials.messages')   

      @yield('content')
    </div>


   <!-- /Footer -->
   @include('layouts.partials-website.botton-bar')

    @include('layouts.partials-website.footer')
   <!-- /. Footer -->

   

	@yield('scripts')
</body>

</html>

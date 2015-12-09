@include('layouts.partials-website.header')

<!-- /. Header -->
<body id="page-top">   
    {{-- @include('layouts.partials.messages') --}}
    @include('layouts.partials-website.navbar')
    @yield('content')


   <!-- /Footer -->
   @include('layouts.partials-website.botton-bar')

    @include('layouts.partials-website.footer')
   <!-- /. Footer -->
</body>

</html>

  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |=========================================================|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |=========================================================|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |=========================================================|
  -->
@include('layouts.partials.header')

{{-- @include('layouts.partials.navigation') --}}

{{-- @include('layouts.partials.messages') --}}
@include('layouts.partials.body')

{{-- @yield('content') --}}

{{-- @yield('scripts') --}}

@include('layouts.partials.footer')
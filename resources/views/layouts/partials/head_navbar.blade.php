<header class="main-header">
  <!-- Logo -->
  <a href="{{ route('admin.home') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>SOL</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>SOL Pieles</b> - SRL</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('site.route') }}"><i class="fa fa-home"> </i> Go to Web Site</a></li>
        @if (auth()->check())
          <li><a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"> </i> Log Out</a></li>
        @endif

      </ul>
    </div>
  </nav>
  <!-- /. Header Navbar -->
</header>
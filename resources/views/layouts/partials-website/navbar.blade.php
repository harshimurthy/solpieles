    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top {{ isset($shrink) ? $shrink : '' }}">
    {{-- <nav class="navbar navbar-default navbar-fixed-top"> --}}
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{-- <a class="navbar-brand page-scroll" href="#page-top">Sol Pieles</a> --}}
                <a class="navbar-brand page-scroll animated  tada" href="#page-top">
                    <img src="{{ asset('images/solpieles.png') }}" class="img-responsives pull-left" height="30px" alt="Image">
                     <span class="pull-right">
                        Sol Pieles - 
                        <small><i class="fa fa-phone"> </i> 809 867 9170</small>
                     </span>
                </a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Products</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        @if (auth()->check())
                            <a class="" href="{{ route('admin.home') }}">Admin</a>
                        @else
                            <a class="" href="{{ url('auth/login') }}">Sign In</a>
                        @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
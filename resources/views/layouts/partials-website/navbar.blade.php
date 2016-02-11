    <?php 
        $currLang = $lang->lang;
        $config = (object)[
            'services' => (object)[
                'es'=>'Servicios',
                'en'=>'Services'
            ],
            'about' => (object)[
                'es'=>'Sobre Nosotros',
                'en'=>'About Us'
            ],
            'products' => (object)[
                'es'=>'Productos',
                'en'=>'Products'
            ],
            'team' => (object)[
                'es'=>'Equipo',
                'en'=>'Team'
            ],
            'contact' => (object)[
                'es'=>'Contactos',
                'en'=>'Contact'
            ],
        ];

        

        $singlePage = $singlePage->singlePage();

     ?>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top {{ isset($shrink) ? 'navbar-shrink' : '' }}">
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
                <a class="navbar-brand page-scroll animated  tada" href={{ $singlePage ? "#page-top" : url('/') }}>
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
                        <a class="page-scroll" href={{ $singlePage ? "#services" : route('services')}}>
                            {{ $config->services->$currLang  }}
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href={{ $singlePage ? "#portfolio" : route('products.index')}}>
                            {{ $config->products->$currLang  }}
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href={{ $singlePage ? "#about" : url('/#about')}}>
                            {{ $config->about->$currLang }}
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href={{ $singlePage ? "#team" : url('/#team')}}>
                            {{ $config->team->$currLang }}
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href={{ $singlePage ? "#contact" : url('/#contact')}}>
                            {{ $config->contact->$currLang }}
                        </a>
                    </li>
                    <li>
                        @if (auth()->check())
                            <a class="" href="{{ route('admin.home') }}">Admin</a>
                        @else
                            <a class="" href="{{ url('auth/login') }}">
                                @if ($lang->lang == 'en')
                                    Sign In
                                @else
                                    Entrar 
                                @endif 
                            </a>
                        @endif
                    </li>
                    <li>
                        {!! Form::open(['route'=>['site.language'], 'class'=>'navbar-form', 'role'=>'form', 'autocomplete'=>"off", 'id'=>'langForm']) !!}   


                            {!! Form::select('lang', ['en'=>'English', 'es'=>'Español'], $lang->lang, ['class'=>'form-control input-sm', 'id'=>'inputLang']) !!} 

                        {!! Form::close() !!}
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    @section('scripts')
        <script>
            jQuery(document).ready(function($) {
                $(document).on('change', $('select#inputLang'), function(event){

                    console.log(event);

                    event.stopPropagation();

                    var form = $('#langForm');
                    var formData = form.serializeArray;

                    return form.submit();

                });
            });
        </script>
    @stop
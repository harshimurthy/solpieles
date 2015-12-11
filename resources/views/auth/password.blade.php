<!-- resources/views/auth/password.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
                <div class="row">
            <div class="well">
                    {!! Form::open() !!}

                        <div class="form-group text-center">
                            <legend>Reset Your Password</legend>
                        </div>

                        {{-- Display Errors --}}
                        @if( $errors->any() )
                            <div class="col-sm-12">
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        {{-- /. Errors --}}

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : null }}">
                            {!! Form::label('email', 'Please Enter Your Email:', ['class'=>'']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                {!! Form::input('email', 'email', null, ['class'=>'form-control', 'placeholder'=>'Please Enter Your Email']) !!}
                            </div>
                        </div>
                        <!-- /. Please Enter Your Email -->
                        
                        <div class="form-group">
                             <button type="submit" class="btn btn-primary">
                                Send Password Reset Link
                            </button>
                            
                        </div>                      


                        <div class="form-group">
                            <a href="{{ url('auth/login') }}">Back to Login Form 
                                <i class="fa fa-sign-in"> </i>
                            </a> 
                        </div> 
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
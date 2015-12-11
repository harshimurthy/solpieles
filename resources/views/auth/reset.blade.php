<!-- resources/views/auth/reset.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="row">
                <div class="well">
                    {!! Form::open(['url'=>['password/reset'], 'method'=>'POST', 'class'=>'', 'role'=>'form', 'autocomplete'=>"off"]) !!}       

                        <div class="form-group">
                            <legend>Password Reset</legend>
                        </div>

                        <input type="hidden" name="token" value="{{ $token }}">

                        
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

                        <div class="form-group {{ $errors->has('password') ? 'has-error' : null }}">
                            {!! Form::label('password', 'Enter New Password:', ['class'=>'']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                {!! Form::input('password', 'password', null, ['class'=>'form-control', 'placeholder'=>'Enter New Password']) !!}
                            </div>
                        </div>
                        <!-- /. Enter New Password -->

                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : null }}">
                            {!! Form::label('password_confirmation', 'Confirm Your Password:', ['class'=>'']) !!}
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                {!! Form::input('password', 'password_confirmation', null, ['class'=>'form-control', 'placeholder'=>'Confirm Your Password']) !!}
                            </div>
                        </div>
                        <!-- /. Confirm Your Password -->

                        <div class="form-group">
                            <button type="submit" class="btn bt-primary">
                                Reset Password
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
            
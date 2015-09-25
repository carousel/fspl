@extends('layouts.master')
    @include('_partials.messages')   
    @section('content')
    <div class="container content">
            <div class="col-lg-4 col-lg-offset-4 margin-bottom-30">
                <p class='lead'>Please signin:</p>
                {!!Form::open(["url"=>"/signup","method"=>"POST"])!!}
                    @if($errors->first('name'))
                        <strong style='color:red'>{!!$errors->first('name')!!}</strong>
                    @endif
                    <br>
                    {!!Form::label("name")!!}
                    {!!Form::text("name",'',['class' => 'form-control','placeholder' => 'enter your name'])!!}
                    @if($errors->first('email'))
                        <strong style='color:red'>{!!$errors->first('email')!!}</strong>
                    @endif
                    <br>
                    {!!Form::label("email")!!}
                    {!!Form::text("email",'',['class' => 'form-control','placeholder' => 'enter your email'])!!}
                    @if($errors->first('password'))
                        <strong style='color:red'>{!!$errors->first('password')!!}</strong>
                    @endif
                    <br>
                    {!!Form::label("password")!!}
                    {!!Form::password("password",['class' => 'form-control','placeholder' => 'enter your password'])!!}
                    @if($errors->first('password_confirmation'))
                        <strong style='color:red'>{!!$errors->first('password_confirmation')!!}</strong>
                    @endif
                    {!!Form::label("password confirmation")!!}
                    {!!Form::password("password confirmation",['class' => 'form-control','placeholder' => 'confirm password'])!!}
                    <br>
                    {!!Form::submit('Signup',['class' => 'btn btn-success pull-right'])!!}
                {!!Form::close()!!}
                <div class="social-login">
                    <p class='lead'>Or use your social account</p>
                    <a href='#'><img src='/assets/img/social/facebook.png' width='40'></a>
                    <a href='#'><img src='/assets/img/social/twitter.png' width='40'></a>
                    <a href='#'><img src='/assets/img/social/google.png' width='40'></a>
                    <a href='#'><img src='/assets/img/social/linkedin.png' width='40'></a>
                </div>
        </div>
        <!--/ END row -->
    </div>
    <!--/ END Template Container -->
    @stop

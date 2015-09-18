@extends('layouts.master')
    @include('_partials.messages')   
    @include('_partials.errors')   
    @section('content')
    <div class="container content"> </div>
    <div class="container content">
            <div class="col-lg-4 col-lg-offset-4">
                <p class='lead'>Please signin:</p>
                {!!Form::open(["url"=>"/signin","method"=>"POST"])!!}
                    {!!Form::label("email")!!}
                    {!!Form::text("email",'',['class' => 'form-control','placeholder' => 'enter email'])!!}
                    {!!Form::label("password")!!}
                    {!!Form::password("password",['class' => 'form-control','placeholder' => 'enter password'])!!}
                    {!!Form::label("password confirmation")!!}
                    {!!Form::password("password confirmation",['class' => 'form-control','placeholder' => 'confirm password'])!!}
                    <br>
                    {!!Form::submit('Signin',['class' => 'btn btn-success pull-right'])!!}
                {!!Form::close()!!}
        </div>
        <!--/ END row -->
    </div>
    <!--/ END Template Container -->
    @stop

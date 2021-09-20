@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">{{$title}}</h1>
        <p class="lead">This is the laravel application from the "Laravel from scratch" Youtube series...</p>
        <a class="btn btn-primary btn-lg" href="/lsapp/public/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/lsapp/public/register" role="button">Register</a>
    </div>
@endsection



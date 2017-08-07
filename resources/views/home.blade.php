@extends('template')
@section('title', 'Home | Student Portal')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h2>
                Welcome
            </h2>
            <p>
                View all the students in our site.
            </p>
            <p>
                <a class="btn btn-primary btn-large" href="#">Learn more</a>
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <h2>
            Fast
        </h2>
        <p>
            It is fast, yes.
        </p>
        <p>
            <a class="btn" href="{{ url('register') }}">Register »</a>
        </p>
    </div>
    <div class="col-md-4">
        <h2>
            Simple
        </h2>
        <p>
            It is also simple. You will see.
        </p>
        <p>
            <a class="btn" href="{{ url('register') }}">Register now »</a>
        </p>
    </div>
    <div class="col-md-4">
        <h2>
            It Works
        </h2>
        <p>
            Try it.
        </p>
        <p>
            <a class="btn" href="{{ url('register') }}">Register now »</a>
        </p>
    </div>
</div>

@endsection
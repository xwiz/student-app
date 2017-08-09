@extends('template')
@section('title', 'View Profile | Student Portal')

@section('content')
<div class="row">
<div class="col-md-12">
        <h2>Student Profile</h2>
</div>
<div class="col-sm-6 col-md-4">
    <img src="{{ url($picture_url) }}" alt="" class="img-rounded img-responsive" />
</div>
<div class="col-sm-6 col-md-8">
    <h4><strong>{{ $first_name }}'s Profile</strong></h4>
    <small>Registered Student<i class="glyphicon glyphicon-ok">
    </i></small>
    <br>
    <p>
        <i class="glyphicon glyphicon-envelope"></i>{{ $email }}
        <br />
        <i class="glyphicon glyphicon-phone"></i>{{ $phone_number }}
        <br>
        <i class="glyphicon glyphicon-user"></i>{{ $age }}</p>
    <h4>Bio</h4>
    <p>{{ $bio }}</p>
</div>
</div>

@endsection
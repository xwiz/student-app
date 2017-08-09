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
    <h4>{{ $first_name }}'s Profile</h4>
    <small>Registered Student<i class="glyphicon glyphicon-registration-mark">
    </i></small>
    
    <p>
        <i class="glyphicon glyphicon-envelope"></i>{{ $email }}
        <br />
        <i class="glyphicon glyphicon-gift"></i>{{ $age }}</p>
    <!-- Split button -->
</div>
</div>

@endsection
@extends('template')
@section('title', 'View Profiles | Student Portal')

@section('content')
<div class="row">
    <div class="col-md-12">
            <h2>Student Profiles</h2>
    </div>
</div>
<div class="row">
<form class="form-horizontal" action="{{ url('search') }}">
    <div class="col-md-12">
        <div class="input-group">
            <input type="text" placeholder="Enter search term" name="keyword" class="form-control input-block">
            <span class="input-group-btn">
                <button class="form-control" type="submit">Search</button>
            </span>
        </div>
    </div>
</form>
</div>
<div class="row">
    @foreach($students as $student)
    <div class="student-item col-md-4 col-sm-6 col-xs-12">
        <div class="col-sm-4 col-xs-6">
        <a href="{{ url('profile/'.$student->id) }}">
            <img src="{{ url($student->picture_url) }}" alt="" class="img-rounded img-responsive" />
            </a>
        </div>
        <div class="col-sm-8 col-xs6">
            <h4><a href="{{ url('profile/'.$student->id) }}">{{ $student->first_name }}'s Profile</a></h4>
            <small>Registered Student<i class="glyphicon glyphicon-registration-mark">
            </i></small>
            
            <p>
                <i class="glyphicon glyphicon-envelope"></i>{{ $student->email }}
                <br />
                <i class="glyphicon glyphicon-gift"></i>{{ $student->age }}</p>
            <!-- Split button -->
        </div>
    </div>
    @endforeach
</div>

@endsection
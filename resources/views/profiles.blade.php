@extends('template')
@section('title', 'View Profiles | Student Portal')

@section('content')
<div class="row">
    <div class="col-md-12">
            <h2>Student Profiles</h2>
    </div>
</div>
<div class="row">
    @foreach($students as $student)
    <div class="student-item col-md-4 col-xs-12">
        <div class="col-sm-4 col-xs-6">
            <img src="{{ url($student->picture_url) }}" alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-8 col-xs6">
            <h4>{{ $student->first_name }}'s Profile</h4>
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
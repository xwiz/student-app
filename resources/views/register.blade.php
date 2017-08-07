@extends('template')
@section('title', 'Register | Student Portal')

@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-8 col-xs-12">
        <h2>Register Now</h2>
        <p>
            Enter your details to register below.
        </p>
        @if(isset($errors))
        @foreach($errors as $error)
        <div class="alert alert-danger">
          {{ $error }}
        </div>
        @endforeach
        @endif
        <form method="post" action="{{ url('register') }}" role="form" enctype="multipart/form-data">

        {{ csrf_field() }}

            <div class="form-group">
                <label for="firstname">
                    First name
                </label>
                <input name="first_name" type="text" class="form-control" id="firstname" />
            </div>
            <div class="form-group">
                <label for="lastname">
                    First name
                </label>
                <input name="last_name" type="text" class="form-control" id="lastname" />
            </div>
            <div class="form-group">                 
                <label for="exampleInputEmail1">
                    Email address
                </label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" />
            </div>
            <div class="form-group">                 
                <label for="address">
                    Address
                </label>
                <input name="address" type="text" class="form-control" id="address" />
            </div>
            <div class="form-group">                 
                <label for="phone">
                    Phone Number
                </label>
                <input name="phone_number" maxlength="11" type="text" class="form-control" id="phone" />
            </div>
            <div class="form-group">                 
                <label for="age">
                    Age
                </label>
                <input name="age" type="number" class="form-control" id="age" />
            </div>
            <div class="form-group">                 
                <label for="bio">
                    Bio
                </label>
                <textarea name="bio" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="password">
                    Password
                </label>
                <input name="password" type="password" class="form-control" id="password" />
            </div>
            <div class="form-group">
                <label for="password_confirmation">
                    Confirm Password
                </label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" />
            </div>
            <div class="form-group">
                 
                <label for="exampleInputFile">
                    Upload Picture
                </label>
                <input name="picture" type="file" id="exampleInputFile" />
                <p class="help-block">
                    Please use a picture less than 2mb that clearly shows your face.
                </p>
            </div>
            <button type="submit" class="btn btn-default">
                Submit
            </button>
        </form>
    </div>
</div>

@endsection
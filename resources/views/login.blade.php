@extends('template')
@section('title', 'Login | Student Portal')

@section('content')
		<div class="col-md-offset-3 col-md-6 col-xs-12">
			<form method="post" action="{{ url('login') }}" class="form-horizontal" role="form">
				<div class="form-group">
					 <h2>Please login to continue</h2>
					 @if(isset($error))
					<div class="alert alert-danger">
					  {{ $error }}
					</div>
					 @endif
					<label for="inputEmail3" class="col-sm-2 control-label">
						Email
					</label>
					<div class="col-sm-10">
						<input name="email" type="email" class="form-control" id="inputEmail3" />
					</div>
				</div>
				<div class="form-group">
					 
					<label for="inputPassword3" class="col-sm-2 control-label">
						Password
					</label>
					<div class="col-sm-10">
						<input name="password" type="password" class="form-control" id="inputPassword3" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							 
							<label>
								<input type="checkbox" /> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 
						<button type="submit" class="btn btn-default">
							Sign in
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
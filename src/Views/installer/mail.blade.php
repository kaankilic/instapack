@extends('instapack::layouts.app');

@section('content')
<div class="panel">
	
	Hello welcome to your application! For continue please press to next button
	<hr/>
	<form action="{{route('instapack::post.mail')}}" method="POST" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">SMTP Host</label>
			<input type="text" name="Hostname" class="form-control" id="" value="localhost" placeholder="Input field">
		</div>

		<div class="form-group">
			<label for="">Username</label>
			<input type="text" name="Username" class="form-control" id="" placeholder="Input field">
		</div>

		<div class="form-group">
			<label for="">Password</label>
			<input type="text" name="Password" class="form-control" id="" placeholder="Input field">
		</div>

		<div class="form-group">
			<label for="">Mail Address</label>
			<input type="text" name="Email" class="form-control" id="" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@stop
@extends('contact.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Add New Contact </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('contact.index') }}"> Back to Address Book </a>
			</div>
		</div>
	</div>
	@if($errors->any())
		<div class="alert alert-danger">
			<strong>Oopps! </strong> Something went wrong.
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{ route('contact.store') }}" method="POST">
		@csrf
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>First Name:</strong>
					<input type="text" name="fname" class="form-control" placeholder="Firdt Name">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Last Name:</strong>
					<input type="text" name="lname" class="form-control" placeholder="First Name">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Email:</strong>
					<input type="text" name="email" class="form-control" placeholder="Email">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Address:</strong>
					<textarea name="detail" placeholder="Address" class="form-control"></textarea>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Phone:</strong>
					<textarea name="detail" placeholder="Phone" class="form-control"></textarea>
				</div>
			</div>

			<div class="col-lg-12">
				
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</form>
@endsection
@extends('contact.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Edit Contact </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('contact.index') }}"> Back to Contact List </a>
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

	<form action="{{ route('contact.update', $contact->id) }}" method="POST">
		@csrf
		@method("PUT")
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Name:</strong>
					<input type="text" name="name" value="{{ $contact->fname }}" class="form-control" placeholder="First Name">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Last Name:</strong>
					<input type="text" name="lname" value="{{ $contact->lname }}" class="form-control" placeholder="First Name">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Email:</strong>
					<input type="text" name="email" value="{{ $contact->email }}" class="form-control" placeholder="Email">
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Address:</strong>
					<textarea name="detail" placeholder="Address" value="{{ $contact->address }}" class="form-control"></textarea>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Phone:</strong>
					<textarea name="detail" placeholder="Phone" value="{{ $contact->cphone }}" class="form-control"></textarea>
				</div>
			</div>
			<div class="col-lg-12">
				
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</form>
@endsection
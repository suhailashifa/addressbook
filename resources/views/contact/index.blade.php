@extends('contact.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Address Book </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('contact.create') }}"> Add New Contact </a>
			</div>
		</div>
	</div>

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p> {{ $message }} </p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th> No </th>
			<th> First Name </th>
			<th> Last Name </th>
			<th> Email </th>
			<th> Address </th>
			<th> Phone Number </th>
			<th> Action </th>
		</tr>
		@foreach($contact as $key => $person)
			<tr>
				<td> {{ $person->$id }} </td>
				<td> {{ $person->fname }} </td>
				<td> {{ $person->lname }} </td>
				<td> {{ $person->email }} </td>
				<td> {{ $person->address }} </td>
				<td> {{ $person->phone }} </td>
				<td>
					<form action="{{ route('contact.destroy', $person->id) }}" method="POST">
						<a class="btn btn-info" href="{{ route('contact.show', $person->id) }}">Show</a>
						<a class="btn btn-primary" href="{{ route('contact.edit', $person->id) }}">Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr> 
		@endforeach

@endsection
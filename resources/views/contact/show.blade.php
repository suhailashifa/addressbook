@extends('contact.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Show Contact </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('contact.index') }}"> Back to Address Book </a>
			</div>
		</div>
	</div>

	<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Name:</strong>
					{{ $contact->fname }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Detail:</strong>
					{{ $contact->lname }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Name:</strong>
					{{ $contact->email }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Name:</strong>
					{{ $contact->address }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Name:</strong>
					{{ $contact->phone }}
				</div>
			</div>
	</div>
@endsection
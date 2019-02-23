@extends('layouts.app')

@section('content')
	<h1>Departments</h1>
	<a href="http://localhost/enterprise/public/" class="btn btn-default">Go Back</a>
	@if(!Auth::guest())
	<a href="http://localhost/enterprise/public/departments/create" class="btn btn-primary">Create New</a> 
	@endif
	@if(count($departments) > 0)
		<div class="well">
		<table class="table table-striped">
		@foreach($departments as $department)
			<tr>
				<td>{{ $department->first_name }}</td>
 				<td>{{ $department->department }}</td>
 				<td>
 					<a class="btn btn-success" href="http://localhost/enterprise/public/departments/{{ $department->id }}">View</a>
 				</td>
 				<td>
 					<a class="btn btn-warning" href="http://localhost/enterprise/public/departments/{{ $department->id }}/edit">Edit</a>
 				</td>
 				<td>
 					<a class="btn btn-danger"  href="http://localhost/enterprise/public/departments/destory">Delete</a>
 				</td>
			</tr>
		@endforeach
		</table>
		</div>
		{{ $departments -> links() }}

	@else
		<p> Nothing to Show </p>

	@endif

@endsection
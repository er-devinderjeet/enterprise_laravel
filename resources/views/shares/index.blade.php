@extends('layouts.app')

@section('content')
	<h1>Shares </h1>
	<a href="http://localhost/enterprise/public/" class="btn btn-default">Go Back</a>
	<a href="http://localhost/enterprise/public/shares/create" class="btn btn-primary">Create Shares</a> 
	@if(count($shares) > 0)
		<div class="well">
		<table>
		@foreach($shares as $share)
			<tr>
				<td>{{ $share->share_name }}</td>
 				<td><chechbox>{{ $share->duration }}</chechbox></td>
 				<td>
 					<a class="btn btn-success" href="http://localhost/enterprise/public/shares/show">View</a>
 				</td>
 				<td>
 					<a class="btn btn-warning" href="http://localhost/enterprise/public/shares/edit">Edit</a>
 				</td>
 				<td>
 					<a class="btn btn-danger"  href="http://localhost/enterprise/public/shares/destory">Delete</a>
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
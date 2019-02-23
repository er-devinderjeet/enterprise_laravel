@extends('layouts.app')

@section('content')

	<h1>Create New Entry</h1>
	{!! Form::open(['url' => 'foo/bar']) !!}
    
    {!! Form::close() !!}
@endsection
@extends('layout')

@section('content')
	@foreach ($employers as $employer)
		<a href="{{ route('employer', ['id'=> $employer->id]) }}">{{ $employer->name }}</a> <br>
	@endforeach
@endsection
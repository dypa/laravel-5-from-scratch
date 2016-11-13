@extends('layout')

@section('content')
	@if (count($employers) > 0)
		@foreach ($employers as $employer)
			<a href="{{ route('employer', ['id'=> $employer->id]) }}">{{ $employer->name }}</a> <br>
		@endforeach
	@endif
@endsection
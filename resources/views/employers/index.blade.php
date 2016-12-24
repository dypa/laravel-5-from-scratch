@extends('layout')

@section('content')
	@if (count($employers) > 0)
		<ul class="list-group">
		@foreach ($employers as $employer)
			<li class="list-group-item"><a href="{{ route('employer', ['id'=> $employer->id]) }}">{{ $employer->name }}</a></li>
		@endforeach
		</ul>
	@endif
@endsection
@extends('layout')

@section('content')
	id : {{ $employer->id }} <br>
	name : {{ $employer->name }} <br>
	notes: <br>
		@if ($employer->notes)
		<ul>
			@foreach ($employer->notes as $note)
				<li>{{ $note->body }}</li>
			@endforeach
		</ul>
		@endif

	<a href="{{ route('employers') }}">back</a>
@endsection
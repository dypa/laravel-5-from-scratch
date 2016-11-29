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

		<form action="{{ route('notes_store', ['id'=> $employer->id]) }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<textarea name="body"></textarea>
			<button>Сохранить</button>
		</form>

	<a href="{{ route('employers') }}">back</a>
@endsection
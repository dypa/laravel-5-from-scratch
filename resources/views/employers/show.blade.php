@extends('layout')

@section('content')
	id : {{ $employer->id }} <br>
	name : {{ $employer->name }} <br>
	notes: <br>
		@if ($employer->notes)
		<ul class="list-group">
			@foreach ($employer->notes as $note)
				<li class="list-group-item">{{ $note->user->name }}: {{ $note->body }} <span class="pull-right">[<a href="{{ route("notes_edit", ['note' => $note->id]) }}">edit</a>]</span></li>
			@endforeach
		</ul>
		@endif

		@foreach($errors->all() as $error)
			{{ $error }} <br>
		@endforeach
		<form action="{{ route('notes_store', ['id'=> $employer->id]) }}" method="POST">
			{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
			{{ csrf_field() }}
			<div class="form-group">
				<textarea name="body" class="form-control">{{ old('body') }}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Сохранить</button>
			</div>
		</form>

	<a href="{{ route('employers') }}">back</a>
@endsection
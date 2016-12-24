@extends('layout')

@section('content')
		<form action="{{ route('notes_update', ['id'=> $note->id]) }}" method="POST">
			{{ method_field('PATCH') }}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<textarea name="body" class="form-control">{{ $note->body }}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Сохранить</button>
			</div>
		</form>
@endsection
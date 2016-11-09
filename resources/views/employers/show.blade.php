@extends('layout')

@section('content')
	id : {{$employer->id}} <br>
	name : {{$employer->name}} <br>

	<a href="{{ route('employers') }}">back</a>
@endsection
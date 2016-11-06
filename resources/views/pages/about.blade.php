@extends('layout')

@section('content')
	about page here

	<br>

	@unless (empty($numbers))
		numbers: <br>
	@endunless
	@foreach ($numbers as $number)
		<li>{{ $number }}</li>
	@endforeach
@endsection
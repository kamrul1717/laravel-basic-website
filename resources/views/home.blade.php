@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem distinctio fuga, ipsam quam consequatur incidunt reprehenderit aperiam doloribus eos nulla obcaecati quae, architecto voluptatum laborum labore ut repudiandae commodi, porro.</p>
@endsection

@section('sidebar')
	@parent
	<p>This is the appended sidebar</p>
@endsection
@extends('layouts.master')


@section('title')
    Show Employee
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@stop


@section('content')
	<div class='employee'>
		<h2>{{ $employee->first_name }} {{ $employee->last_name }}</h2>
		<h3>{{ $employee->position }}</h3>
		<h3>DOB: {{ $employee->day }}/{{ $employee->month }}/{{ $employee->year }}</h3>
		<br><br>
    </div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop
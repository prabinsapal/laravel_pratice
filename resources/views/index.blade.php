@extends('layouts.master')

@section('content')
<div class="container">
	<h1>Hello World</h1>

	@foreach($tasks as $task)
		{{ $task }}
	@endforeach	
</div>

@stop
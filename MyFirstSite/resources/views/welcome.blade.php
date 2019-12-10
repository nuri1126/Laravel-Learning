@extends('layout')
 <!--section block-->
@section('title', 'home')

@section('content')
<h1>my {{$foo}} website</h1>
<ul>
	@foreach($tasks as $task)
    	<!--<li>< ?= $task; ?></li>-->
    	<li>{{ $task }}</li>
	@endforeach

	<?php foreach ($tasks as $task) :?>
    	<li><?= $task; ?></li>
	<?php endforeach; ?></ul>
@endsection

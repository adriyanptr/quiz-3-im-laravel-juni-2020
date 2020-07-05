@extends('layouts.master')

@section('content')
<div class="ml-2 mt-2">
	<div class="card">
		<div class="card-header bg-primary">
			<h3 class="card-title text-white">Entity Relationship Diagram</h3>
		</div>
		<div class="card-body text-center">
			<img src="{{asset('images/erd.png')}}" class="img-fluid">
		</div>
	</div>
</div>
@endsection
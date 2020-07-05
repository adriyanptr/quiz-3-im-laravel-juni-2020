@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card table-responsive">
		<div class="card-header bg-primary">
			<h1 class="card-title text-white">Edit Artikel</h1>
		</div>
		<form action="/artikel/{{$artikel->id}}" method="POST">
			@csrf
			@method('PUT')
			<div class="card-body">
				<div class="form-group">
					<label for="judul">Judul : </label>
					<input type="text" class="form-control" name="judul" value="{{$artikel->judul}}">
				</div>
				<div class="form-group">
					<label for="isi">Isi : </label>
					<input type="text" class="form-control" name="isi" value="{{$artikel->isi}}">
				</div>
				<div class="form-group">
					<label for="tag">Tag : </label>
					<input type="text" class="form-control" name="tag" value="{{$artikel->tag}}">
				</div>
				<a href="/artikel" class="btn btn-primary">Kembali</a>
				<button type="submit" class="btn btn-primary">Edit</button>
			</div>
		</form>
	</div>
</div>
@endsection
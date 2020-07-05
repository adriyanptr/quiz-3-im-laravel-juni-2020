@extends('layouts.master')

@section('content')
<div class="ml-2 mt-2">
	<div class="card table-responsive">
		<div class="card-header bg-primary">
			<h3 class="card-title text-white">Data Artikel</h3>
		</div>
		<div class="card-body">
			<a href="/artikel/create" class="btn btn-primary mb-2 mt-2">Buat Artikel Baru</a>
			<table class="table">
			    <thead>
			      <tr>
			        <th style="width: 10px">No</th>
			        <th style="width: 200px">Judul Artikel</th>
			        <th>Isi Artikel</th>
			        <th style="width: 170px">Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			    	@foreach($artikel as $key => $data)
			    		<tr>
			    			<td>{{$key+1}}</td>
			    			<td>{{$data->judul}}</td>
			    			<td>{{$data->isi}}</td>
			    			<td>
			    				<a href="/artikel/{{$data->id}}" class="btn btn-sm btn-info">Show</a>
			    				<a href="/artikel/{{$data->id}}/edit" class="btn btn-sm btn-default">Edit</a>
			    				<form action="/artikel/{{$data->id}}" method="POST" style="display: inline">
			    					@csrf
			    					@method('DELETE')
			    					<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
			    				</form>
			    			</td>
			    		</tr>
			    	@endforeach
			    </tbody>
			</table>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
@extends('layouts.app')

@section('title')
	Edit Post
@endsection

@section('content')
<div class="container">
	<br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Edit Post</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
        	@if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error" role="alert">
                    {{ session('error') }}
                </div>
            @endif
			<form action="{{ route('post.update', ['post' => $post->id]) }}" method="POST">
				@csrf
                @method('PUT')
				<div class="form-group">
					<label for="merk_laptop">Merk Laptop:</label>
					<input type="text" required class="form-control" id="nama" name="nama" value="{{ $post->nama }}">
				</div>
				<div class="form-group">
					<label for="seri_laptop">Seri Laptop:</label>
					<textarea name="seri_laptop" class="form-control" id="seri_laptop" rows="5" required>{{ $post->nip }}</textarea>
				</div>
				<div class="form-group">
					<label for="tahun_produksi">Tahun Produksi:</label>
					<textarea name="tahun_produksi" class="form-control" id="tahun_produksi" rows="5" required>{{ $post->alamat }}</textarea>
				</div>
				<div class="form-group">
				<label for="status">Select post status</label>
				<select class="form-control" id="status" name="status">
					<option value="pending" @if ($post->status == 'pending') selected @endif>Draft</option>
					<option value="completed" @if ($post->status == 'completed') selected @endif>Publised</option>
				</select>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
        </div>
    </div>
</div>
@endsection
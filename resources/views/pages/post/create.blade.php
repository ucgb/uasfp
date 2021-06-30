@extends('layouts.app')
@section('nama')
    Create Post
@endsection

@section('content')
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Create Post</h2>
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
      <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="merk_laptop">Merk Laptop :</label>
          <input type="text" class="form-control" id="merk_laptop" name="merk_laptop" required>
        </div>
        <div class="form-group">
          <label for="seri_laptop">Seri Laptop:</label>
          <textarea name="seri_laptop" class="form-control" id="seri_laptop" rows="5" required></textarea>
        </div>
        <div class="form-group">
          <label for="tahun_produksi">Tahun Produksi:</label>
          <textarea name="tahun_produksi" class="form-control" id="tahun_produksi" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit Post</button>
      </form>
        </div>
    </div>
    
</div>
<x-footer />
@endsection
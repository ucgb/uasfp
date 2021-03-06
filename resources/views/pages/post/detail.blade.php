@extends('layouts.app')

@section('title')
    Description
@endsection

@section('content')
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Post Description</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
            <br><br>
        	<div class="post-title">
                <strong>Merk Laptop: </strong> {{ $post->merk_laptop }}
            </div>
            <br>
            <div class="post-description">
                <strong>Seri Laptop: </strong> {{ $post->seri_laptop }}
            </div>
            <br>
            <div class="post-description">
                <strong>Tahun Produksi: </strong> {{ $post->tahun_produksi }}
            </div>
        </div>
    </div>
</div>
@endsection
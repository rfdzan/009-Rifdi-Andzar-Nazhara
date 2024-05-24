@extends('layout.default')
@section('content')
<!-- User section -->
<link rel="stylesheet" href="{{asset('css/user/user.css')}}">
<section class="user-page-section">
    <div class="upload-button-container">
        <button class="upload-button">Upload</button>
    </div>
    @include('upload_form')
    <div class="user-page">
        <div class="user-artworks">
            @foreach ($artworks as $art)
            <a class="user-artwork-link" href="artwork?id={{$art->id}}">
                <div class="user-artwork-container">
                    <img src="{{$art->path}}">
                </div>
            </a>
            @endforeach
        </div>
        <!-- user desc -->
        <div class="user-description">
            <h2>{{$name}}</h2>
            <p>Description: </p>
        </div>
</section>

@endsection
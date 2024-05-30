@extends('layout.default')
@section('content')
<!-- User section -->
<link rel="stylesheet" href="{{asset('css/user/user.css')}}">
<section class="user-page-section">
    @if(session()->get(request()->cookie('sessionId')) !== null)
    @if (Request::is(session()->get(request()->cookie('sessionId'))['user']))
    <div class="upload-button-container">
        <button class="upload-button" id="upload-button">Upload</button>
    </div>
    @include('upload_form')
    @endif
    @endif
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
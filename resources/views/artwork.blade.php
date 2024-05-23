@extends('layout.default')
@section('content')
<!-- artwork section -->
<link rel="stylesheet" href="css/artwork/artwork.css">
<section id="artwork">
    <div class="artwork-card">
        <div class="artwork-container">
            <img src="{{$path}}" width="500px">
        </div>
    </div>
    <div class="author-card">
        <div class="author-container">
            <h2 class="artwork-title">{{$artwork_name}}</h2>
            <a class="author-link" href="/{{$author}}">
                <p>{{$author}}</p>
            </a>
        </div>
    </div>
</section>
@endsection
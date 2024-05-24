@extends('layout.default')
@section('content')
<!-- artwork section -->
<link rel="stylesheet" href="css/artwork/artwork.css">
<script src="js/artwork/authorCard.js"></script>
<section id="artwork">
    <div id="artwork-card">
        <div class="artwork-container">
            <img src="{{$path}}" width="500px">
        </div>
    </div>
    <div id="author-card">
        <div id="author-container">
            <h2 class="artwork-title">{{$artwork_name}}</h2>
            <a class="author-link" href="/{{$author}}">
                <p>{{$author}}</p>
            </a>
        </div>
    </div>
</section>
@endsection
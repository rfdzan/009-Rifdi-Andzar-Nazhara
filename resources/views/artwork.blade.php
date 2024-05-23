@extends('layout.default')
@section('content')
<!-- artwork section -->
<link rel="stylesheet" href="css/artwork/artwork.css">
<section id="artwork">
    <div class="artwork-card">
        <div class="artwork-container">
            <img src="{{$path}}" width="500px">
            <h2>{{$artwork_name}}</h2>
        </div>
    </div>
    <div class="author-card">
        <div class="author-container">
            <h3>Author:</h3>
            <a class="author-link" href="/{{$author}}">
                <p>{{$author}}</p>
        </div>
    </div>
</section>
@endsection
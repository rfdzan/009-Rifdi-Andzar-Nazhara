@extends('layout.default')
@section('content')
<!-- artwork section -->
<link rel="stylesheet" href="css/artwork/artwork.css">
<section id="artwork">
    <div class="div-artwork">
        <h2>{{$artwork_name}}</h2>
        <img src="{{$path}}" width="500px">
        <section class="artwork-description">
            <h3>Author:</h3>
            <div>
                <a href="/{{$author}}">
                    <p>{{$author}}</p>
                </a>
            </div>
        </section>
    </div>
</section>
@endsection
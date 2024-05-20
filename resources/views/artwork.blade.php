@extends('layout.default')
@section('content')
<!-- artwork section -->
<section class="artwork">
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
</section>
@endsection
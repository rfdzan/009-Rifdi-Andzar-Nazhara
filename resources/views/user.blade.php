@extends('layout.default')
@section('content')
<!-- User section -->
<section>
    <div class="section-user-artworks">
        <h2>Works</h2>
        @foreach ($artworks as $art)
        <a href="artwork?id={{$art->id}}"><img src="{{$art->path}}"></a>
        @endforeach
    </div>
    <div class="section-user-sidebar">
        <h2>{{$name}}</h2>
        <p>Description: </p>
    </div>
</section>

@endsection
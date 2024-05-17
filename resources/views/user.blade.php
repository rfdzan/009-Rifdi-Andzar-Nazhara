@extends('layout.default')
@section('content')
<!-- User section -->
    <div class="div-user-artworks">
        <div class="user-works-title">
            <h2>Works</h2>
        </div>
        <div class="user-upload">
            <form class="user-upload-form" method="post">
                @csrf
                <button class="user-upload-button" formaction="/{{$name}}/upload">Upload</button>
            </form>
        </div>
        @foreach ($artworks as $art)
        <a href="artwork?id={{$art->id}}"><img src="{{$art->path}}" width="300px"></a>
        @endforeach
    </div>
    <div class="div-user-sidebar">
        <h2>{{$name}}</h2>
        <p>Description: </p>
    </div>
</section>

@endsection
@extends('layout.default')
@section('content')
<!-- User section -->
<link rel="stylesheet" href="{{asset('css/user.css')}}">
<div class="div-user-artworks">
    <div class="user-works-title">
        <h2>Works</h2>
    </div>
    <div class="user-upload">
        <form class="user-upload-form" action="{{ route('artwork_upload', $name)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="file">Upload</label>
                <input id="upload-artwork" type="file" name="file[]" accept="image/*" multiple>
                <input type="submit" value="Submit">
            </div>
        </form>
        <button id="clear-file">Clear</button>
        <script src="{{asset('upload.js')}}"></script>
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
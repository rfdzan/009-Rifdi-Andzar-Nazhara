@extends('layout.default')
@section('content')
<!-- User section -->
<link rel="stylesheet" href="{{asset('css/user/user.css')}}">
<section class="user-page-section">
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
        <!-- upload -->
        <div class="popup-form">
            <div class="user-upload">
                <form class="user-upload-form" action="{{ route('artwork_upload', $name)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="file">Upload</label>
                        <input id="upload-artwork" type="file" name="file[]" accept="image/*" multiple>
                        <input type="submit" value="Submit">
                    </div>
                    <button id="clear-file">Clear</button>
                </form>
                <script src="{{asset('js/upload.js')}}"></script>
            </div>
        </div>
        <div class="user-description">
            <h2>{{$name}}</h2>
            <p>Description: </p>
        </div>
</section>

@endsection
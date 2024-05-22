@extends('layout.default')
@section('content')
<!-- Images Section-->
<link rel="stylesheet" href="{{asset('css/homepage/homepage.css')}}">
<section class="section-homepage-images">
    <div class="homepage-title">
        <h2>Recent Works</h2>
    </div>
    <div class="homepage-image-parent">
        @foreach ($images as $name => $path)
        <a class="homepage-image-link" href="artwork?id={{$name}}">
            <div class="homepage-image-container">
                <img class="homepage-img" src="{{$path}}">
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection
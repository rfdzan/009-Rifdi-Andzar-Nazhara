@extends('layout.default')
@section('content')
<!-- Images Section-->
<link rel="stylesheet" href="{{asset('css/homepage.css')}}">
<section class="section-homepage-images">
    <div class="homepage-title">
        <h2>Recent Works</h2>
    </div>
    <div class="homepage-image-parent">
        @foreach ($images as $name => $path)
        <div class="homepage-image-container">
            <a href="artwork?id={{$name}}">
                <img src="{{$path}}" width="400px">
            </a>
        </div>
        @endforeach
    </div>
</section>
@endsection
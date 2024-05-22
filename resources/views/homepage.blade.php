@extends('layout.default')
@section('content')
<!-- Images Section-->
<link rel="stylesheet" href="{{asset('css/homepage.css')}}">
<section class="section-homepage-images">
    <h2>Recent Works</h2>
    <ul>
        @foreach ($images as $name => $path)
        <a href="artwork?id={{$name}}">
            <img src="{{$path}}" height="200px">
        </a>
        @endforeach
    </ul>
</section>
@endsection
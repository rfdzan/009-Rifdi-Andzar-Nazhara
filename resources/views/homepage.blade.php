@extends('layout.default')
@section('content')
<!-- Images Section-->
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
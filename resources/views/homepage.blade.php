@extends('layout.default')
@section('content')
<!-- Images Section-->
<section class="section-homepage-images">
    <h2>Recent Works</h2>
    <ul>
        @foreach ($images as $img)
        <img src="{{$img}}" height="200px">
        @endforeach
    </ul>
</section>
@endsection
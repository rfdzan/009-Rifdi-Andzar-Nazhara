@extends('layout.default')
@section('content')
<section>
    <h2>{{$upload_msg}}</h2>
    <a href="{{route('home')}}">
        <p>Return to home</p>
    </a>
</section>
@endsection
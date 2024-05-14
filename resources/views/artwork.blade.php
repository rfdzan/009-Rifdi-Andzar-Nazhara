@extends('layout.default')
@section('content')
<!-- artwork section -->
<section class="artwork">
    <h2>{{$artwork_name}}</h2>
    <img src="{{$path}}">
</section>
@endsection
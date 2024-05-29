@extends('layout.default')
@section('content')
<!-- err section -->
<link rel="stylesheet" href="{{asset('css/err/err.css')}}">
<section class="err">
    <h2>Err: {{$msg}}</h2>
</section>
@endsection
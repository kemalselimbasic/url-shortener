@extends('master')
@section('preview')
    <div class="container">
        <h1>URL</h1><h2>{{$url}}</h2> <br>
        <h1>SLUG</h1><h2>{{$slug}}</h2><br>
        <h1>LINK</h1><h2> <a href="https://127.0.0.1:8000/{{$slug}}">https://127.0.0.1:8000/{{$slug}}</a></h2>

    </div>
@endsection

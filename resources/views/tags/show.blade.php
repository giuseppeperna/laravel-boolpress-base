@extends('layouts.app')

@section('title', 'post')

@section('main')

<h1>{{ $tag->name }}</h1>

<ul>
    @foreach($tag->posts as $post)
    <li>Post: {{ $post->title }}</li>
    <br>
    @endforeach
    
</ul>

 
@endsection
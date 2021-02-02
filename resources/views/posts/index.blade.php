@extends('layouts.app')

@section('title', 'Posts')

@section('main')
<div>
    @foreach ($posts as $post)
    <div>
        <h3>Title: {{ $post->title }}</h3>
        <span>Author: {{ $post->author }}</span>
    </div>
    @endforeach
</div>
@endsection
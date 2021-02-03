@extends('layouts.app')

@section('title', 'Posts')

@section('main')
<div>
    @foreach ($posts as $post)
    <div class="post-container">
        <h3>Title: {{ $post->title }}</h3>
        <span>Author: {{ $post->author }}</span>
        <div>
            <a href="{{ route('posts.show', $post->id) }}">Dettagli</a>
        </div> 
    </div>
    @endforeach  
</div>
@endsection
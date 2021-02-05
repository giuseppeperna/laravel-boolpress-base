@extends('layouts.app')

@section('title', 'Posts')

@section('main')

<table class="post-details">
    <tr>
        <th>Id</th>
        <th>Titolo</th>
        <th>Autore</th>
        <th>Slug</th>
        <th><a class="btn btn-success" href="{{ route('posts.create') }}">Crea nuovo post</a></th>
    </tr>
    
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->author }}</td>
        <td>{{ $post->postInfo['slug'] }}</td>
        <td>
            <a href="{{ route('posts.show', $post->id) }}">Dettagli</a>
        </td>
    </tr>
    @endforeach
</table>

<div class="pagination">
    {{ $posts->links() }}
</div>
@endsection
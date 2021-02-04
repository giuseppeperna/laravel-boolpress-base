@extends('layouts.app')

@section('title', 'Posts')

@section('main')
<table class="post-details">
    <tr>
      <th>Titolo</th>
      <th>Categoria</th>
      <th>Descrizione</th>
      <th>Tags</th>
    </tr>
    <tr>
      <td>{{ $post['title'] }}</td>
      <td>{{ $category['title'] }}</td>
      <td>{{ $info['description'] }}</td>
      <td>
        @foreach($post->tags as $tag)
          <a href="{{ route('tags.show', $tag->id)}} ">{{ $tag->name }}</a>
          <br>
        @endforeach
      </td>
    </tr>
  </table>
  <form class="go-back" action="{{ route("posts.destroy",$post->id) }}" method="post">
    @csrf
    @method("delete")
    <button type="submit" class="btn btn-danger">ELIMINA</button>
  </form>
  <div class="go-back">
    <a href="{{ route('posts.edit', $post->id)}}">modifica</a>
  </div>
  <div class="go-back">
    <a href="{{ route('posts.index')}}">Indietro</a>
  </div>
@endsection

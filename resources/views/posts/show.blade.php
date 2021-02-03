@extends('layouts.app')

@section('title', 'Posts')

@section('main')
<table class="post-details">
    <tr>
      <th>Titolo</th>
      <th>Categoria</th>
      <th>Descrizione</th>
    </tr>
    <tr>
      <td>{{ $post['title'] }}</td>
      <td>{{ $category['title'] }}</td>
      <td>{{ $info['description'] }}</td>
    </tr>
  </table>
  <div class="go-back">
    <a href="{{ route('posts.index')}}">Indietro</a>
  </div>
@endsection

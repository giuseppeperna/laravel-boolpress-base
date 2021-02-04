@extends('layouts.app')

@section('title', 'Tags')

@section('main')
<table class="post-details">
    <tr>
      <th>ID</th>
      <th>Tag</th>
      <th>Post</th>
    </tr>
    @foreach($tags as $tag)
    <tr>
        <td>{{ $tag->id }}</td>
        <td>{{ $tag->name }}</td>
        <td>
            <a href="{{ route('tags.show', $tag->id)}}">vai</a>
        </td>
    </tr>
    @endforeach
  </table>
@endsection
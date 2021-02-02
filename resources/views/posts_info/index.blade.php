@extends('layouts.app')

@section('title', 'Post Info')

@section('main')
<div>
    @foreach ($postsInfo as $info)
    <div>
        <p>Description: {{ $info->description }}</p>
        <span>slug: {{ $info->slug }}</span>
    </div>
    @endforeach
</div>
@endsection
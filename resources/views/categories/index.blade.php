@extends('layouts.app')

@section('title', 'Categories')

@section('main')
<div>
    @foreach ($categories as $category)
    <div>
        <h3>Description: {{ $category->title }}</h3>
        <span>slug: {{ $category->slug }}</span>
    </div>
    @endforeach
</div>
@endsection
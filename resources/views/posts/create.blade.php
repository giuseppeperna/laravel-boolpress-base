@extends('layouts.app')

@section('title', 'Edit')

@section('main')

<form method="POST" action="{{route('posts.store')}}">
    <div class="form-group container-form">
        @csrf
        @method('Post')

        <label for="title">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Titolo" 
        value="">
        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <label for="author">Autore</label>
        <input type="text" name="author" class="form-control" id="author" placeholder="Autore" 
        value="">
        @error('author')
            <p>{{ $message }}</p>
        @enderror

        <label>Categoria</label>
        <div class="categories">
            <select name="category_id" id="">
                <option>...</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{$category->title}}</option>
                @endforeach
            </select>
            @error('category_id')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <label for="description">Descrizione</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Descrizione"
        value="">
        @error('description')
            <p>{{ $message }}</p>
        @enderror

        <fieldset>
            <legend>Tags</legend>
            @foreach($tags as $tag)
                <div class="tags-container">
                    <input type="checkbox" id ="{{$tag->name . '_check'}}"name="tags[]" value="{{ $tag->id }}">
                    <label for="{{$tag->name . '_check'}}"> {{ $tag->name }} </label>
                </div>
            @endforeach
        </fieldset>
        @error('tags')
            <p>{{ $message }}</p>
        @enderror

    </div>
    <div class="submit-container">
        <button type="submit" class="btn btn-success">Crea</button>
    </div>
    <div class="go-back">
        <a href="{{ route('posts.index')}}">Indietro</a>
    </div>
</form>

@endsection
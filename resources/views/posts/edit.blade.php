@extends('layouts.app')

@section('title', 'Edit')

@section('main')

<form method="POST" action="{{route('posts.update', $post['id'])}}">
    <div class="form-group container-form">
        @csrf
        @method('Put')

        <label for="title">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="title" 
        value="{{$post->title}}">

        <label for="author">Autore</label>
        <input type="text" name="author" class="form-control" id="author" placeholder="title" 
        value="{{$post->author}}">

        <label>Categoria</label>
        <div class="categories">
            <select name="category_id" id="">
                <option>...</option>
                @foreach ($categories as $category)
                <option {{ $post->categories->id == $category->id ? 'selected' : ''}} value="{{ $category->id }}">{{$category->title}}</option>        
                @endforeach
            </select>
        </div>
        <label for="description">Descrizione</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Room"
        value="{{$post->postInfo->description}}">

        <fieldset>
            <legend>Tags</legend>
            @foreach($tags as $tag)
                <div class="tags-container">
                    <input type="checkbox" id ="{{$tag->name . '_check'}}"name="tags[]" value="{{ $tag->id }}" 
                    @foreach ($post->tags as $postTag)
                        @if($tag->id == $postTag->id) checked @endif
                    @endforeach>
                    <label for="{{$tag->name . '_check'}}"> {{ $tag->name }}</label>
                </div>
            @endforeach
        </fieldset>

    </div>
    <div class="submit-container">
        <button type="submit" class="btn btn-success">Modifica</button>
    </div>
    <div class="go-back">
        <a href="{{ route('posts.show', $post->id)}}">Indietro</a>
    </div>
</form>
@endsection
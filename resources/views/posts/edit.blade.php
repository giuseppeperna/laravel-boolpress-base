@extends('layouts.app')

@section('title', 'Edit')

@section('main')
{{-- <div class="cta-homepage">
    <a href="/">Homepage</a>
</div> --}}
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

        <label for="category">Categoria</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="category"
        value="{{$post->categories->title}}">

        <label for="description">Descrizione</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Room"
        value="{{$post->postInfo->description}}">

        <fieldset>
            <legend>Tags</legend>
            @foreach($tags as $tag)
                <div>
                    <input type="checkbox" id ="{{$tag->name . '_check'}}"name="tags[]" value="{{ $tag->id }}">
                    <label for="{{$tag->name . '_check'}}"> {{ $tag->name }}</label>
                </div>
            @endforeach
        </fieldset>

    </div>
    <div class="submit-container">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form>
@endsection
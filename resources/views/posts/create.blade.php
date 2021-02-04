@extends('layouts.app')

@section('title', 'Edit')

@section('main')

<form method="POST" action="{{route('posts.store')}}">
    <div class="form-group container-form">
        @csrf
        @method('Post')

        <label for="title">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="titolo" 
        value="">

        <label for="author">Autore</label>
        <input type="text" name="author" class="form-control" id="author" placeholder="autore" 
        value="">

        <label>Categoria</label>
        <select name="category_id" id="">
            <option>...</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{$category->title}}</option>
                
            @endforeach
        </select>

        <label for="description">Descrizione</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Descrizione"
        value="">

        <fieldset>
            <legend>Tags</legend>
            @foreach($tags as $tag)
                <div>
                    <input type="checkbox" id ="{{$tag->name . '_check'}}"name="tags[]" value="{{ $tag->id }}">
                    <label for="{{$tag->name . '_check'}}"> {{ $tag->name }} </label>
                </div>
            @endforeach
        </fieldset>

    </div>
    <div class="submit-container">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form>

@endsection
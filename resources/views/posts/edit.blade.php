@extends('layouts.master')

@section('content')

    <form class="form-control" action="/post/{{$post->id}}" method="POST">
        {{csrf_field()}}
        @method('PATCH')
        <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" class="form-control" id="title"  placeholder="Enter title" name="title" value="{{$post->title}}">
            <small id="emailHelp" class="form-text text-muted">Название поста</small>
        </div>
        <div class="form-group">
            <label for="body">Post content</label>
            <input type="text" class="form-control" id="body" placeholder="Content" name="body" value="{{$post->body}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection
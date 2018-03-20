@extends('layouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

        <p>
            {{$post->body}}
        </p>

        <a href="/post/{{$post->id}}/edit" class="btn btn-light">Редактировать</a>

        <form action="/post/{{$post->id}}" method="post" class="form-control-sm">
            {{csrf_field()}}
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
    </div>

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="/">Назад</a>
    </nav>

@endsection
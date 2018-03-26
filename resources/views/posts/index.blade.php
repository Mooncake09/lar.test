@extends('layouts.master')

@section('content')

    @foreach($posts as $post)
    <div class="blog-post">
        <a href="/post/{{$post->id}}"><h2 class="blog-post-title">{{$post->title}}</h2></a>
        <p class="blog-post-meta">December 23, 2013 by <a href="#">{{$post->user->name}}</a></p>

        <p>
            {{$post->body}}
        </p>
    </div>
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

@endsection
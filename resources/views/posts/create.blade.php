@extends('layouts.master')

@section('content')

<form class="form-control" action="/post" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control" id="title"  placeholder="Enter title" name="title">
        <small id="emailHelp" class="form-text text-muted">Название поста</small>
    </div>
    <div class="form-group">
        <label for="body">Post content</label>
        <input type="text" class="form-control" id="body" placeholder="Content" name="body">
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
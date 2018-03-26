<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {

        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|min:5',
            'body' => 'required|min:10'
        ]);

        //$post = new Post();

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        $post->save();


        return redirect('/');
    }

    public function show($id)
    {

        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {

        $post = Post::find($id);

        return view('posts.edit', compact('post'));

    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|min:5',
            'body' => 'required|min:10'
        ]);

        //$post = new Post();

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        return redirect('/');
    }

    public function destroy($id)
    {

            $post = Post::find($id);
            $post->delete();



        return redirect('/');
    }
}

<?php

namespace Hamidreza\LaravelCrudExample\Http\Controllers;

use Hamidreza\LaravelCrudExample\Http\Requests\PostRequest;
use Hamidreza\LaravelCrudExample\Models\Post;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        $data = [
            'posts' => $posts
        ];
        return view('post::index', $data);
    }

    public function create()
    {
        return view('post::create');
    }

    public function store(PostRequest $request)
    {
        (new Post)->store($request);
        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
        $data = [
            'post' => $post,
        ];
        return view('post::edit')->with($data);
    }

    public function update(Post $post, Request $request)
    {
        $post->edit($request);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        $data = [
            'post' => $post,
        ];
        return view('post::show')->with($data);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}

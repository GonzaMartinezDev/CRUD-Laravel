<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\EditRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(2);
        return view('dashboard.post.index', compact('posts'));
    }

    public function create()
    {
        $post = new Post();
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    public function store(StoreRequest $request)
    {
        Post::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return "View show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditRequest $request, Post $post)
    {
        $post->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
    }
}

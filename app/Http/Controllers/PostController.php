<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::latest()->paginate(5);
        return view('post.index', [
            'posts' => $post,
            'pageTitle' => 'Posts'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', [
            'pageTitle' => 'Create Post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->body;
        $post->author = $request->author;
        $post->published = $request->published ?? false;
        $post->save();
        return redirect('/posts')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findorFail($id);
        return view('post.show', [
            'post' => $post,
            'pageTitle' => $post->title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $post = Post::findorFail($id);
        return view('post.edit', [
            'post' => $post,
            'pageTitle' => 'Edit Post - ' . $post->title
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $post = Post::findorFail($id);
        $post->title = $request->input('title');
        $post->body = $request->body;
        $post->author = $request->author;
        $post->published = $request->published ?? false;
        $post->save();
        return redirect('/posts')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findorFail($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('comment.index', [
            'comments' => $comments,
            'pageTitle' => 'Comments'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create', [
            'pageTitle' => 'Create Comment'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->author = $request->input('author');
        $comment->post_id = $request->input('post_id');
        $comment->save();
        return redirect('/posts/' . $comment->post_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findorFail($id);
        return view('comment.show', [
            'comment' => $comment,
            'pageTitle' => 'View comment'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::findorFail($id);
        return view('comment.edit', [
            'comment' => $comment,
            'pageTitle' => 'Edit comment'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

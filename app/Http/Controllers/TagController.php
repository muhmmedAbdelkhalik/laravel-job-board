<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::paginate(10);
        return view('tag.index', [
            'tags' => $tags,
            'pageTitle' => 'Tags'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create', ['pageTitle' => 'Tag Comment']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::findorFail($id);
        return view('tag.show', [
            'tag' => $tag,
            'pageTitle' => 'View tag'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::findorFail($id);
        return view('tag.edit', [
            'tag' => $tag,
            'pageTitle' => 'Edit tag'
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

//    function testManyToMany()
//    {
////        $post2 = Post::find(2);
////        $post4 = Post::find(4);
////
////        $post2->tags()->attach([1, 2]);
////        $post4->tags()->attach([1]);
////
////        return response()->json([
////            'post2' => $post2->tags,
////            'post4' => $post4->tags,
////        ]);
//        $tag = Tag::find(1);
//        $tag->posts()->attach(['01977e86-0a25-72f9-baf5-48c4fac5a1d1']);
//
//
//        return response()->json([
//            'tag' => $tag->title,
//            'post' => $tag->posts,
//        ]);
//    }

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::orderBy('id','DESC')->get();
        return view('post', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = New Post();
        $post->title= $request->title;
        $post->description= $request->description;
        $post->post= $request->post;
        $post->category= $request->category;
        
        if ($request->file('photo') != null) {
            $request->photo = photoStore($request->file('photo'), "imageusers");
            $post->photo = $request->photo;
        }

       
        $post->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }
    public function report(Request $request)
    {
        
        $post= Post::find($request->id);
        return view('post_view',compact('post'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $table = Post::find($request["id"]);
        photoDestroy($table->photo, "imageusers");
        $post= Post::find($request->id);
        $post->delete();
       
    }
}

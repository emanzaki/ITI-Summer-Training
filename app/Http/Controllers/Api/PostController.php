<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    function index(){
        $posts=Post::all();
        return PostResource::collection($posts);
    }
    function destroy($id)
    {
        Post::destroy($id);
        return "Successfully deleted";
    }
    function store(Request $request)
    {
        Post::create(
            [
                'title' => $request->title,
                'descr' => $request->descr,
                'user_id' => $request->user_id
            ]
        );
        return "Stored";
    }
    function show($id)
    {   
        return Post::find($id);
    }
    function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->descr = $request->descr;
        $post->save();
        return "Updated";
    }
}



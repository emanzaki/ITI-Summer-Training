<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Auth;
use App\Http\Requests\StorePostRequest;
class PostController extends Controller
{
    function index()
    {
        $posts = Post::all();

        return view("post.posts",["posts"=>$posts]);
    }
    
    function show($id)
    {
        $post = Post::find($id);
        return view("post.show", ["post" => $post]);
    }
    function create()
    {
        $user= User::all();
        return view("post.create",["users"=>$user]);
    }
    function store(StorePostRequest $request)
    {
        Post::create(
            [
                'title'=>$request->title,
                'descr'=>$request->descr,
                'user_id'=>Auth::id()
                
                
            ]
        );
        return redirect('/posts');
    }
    function edit($id)
    {   $users=User::all();
        $post = Post::find($id);
        return view("post.edit", ["post" => $post],["users"=>$users]);
    }
    function update(StorePostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request['title'];
        $post->descr = $request['descr'];
        $post->save();
        return redirect('/posts');
    }
    function destroy($id)
    {
        Post::destroy($id);
        return redirect('/posts');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function index()
    {
        $users = User::all();
        return view("User.table", ["users" => $users]);
    }
    function destroy($id)
    {
        
        $user = User::find($id);

        // Detach or delete related posts before deleting the user
        $user->posts()->update(['user_id' => null]); // This will update all related posts
        $user->delete();
        return redirect('/posts');
    }
    function show($id)
    {
        $user = User::find($id);
        return view("user.show", ["user" => $user]);
    }
}

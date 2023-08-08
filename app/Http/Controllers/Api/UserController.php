<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        return User::all();

    }
    function destroy($id)
    {

        $user = User::find($id);
        // Detach or delete related posts before deleting the user
        $user->posts()->update(['user_id' => null]); // This will update all related posts
        $user->delete();
        return "Deleted";
    }
    function show($id)
    {
        return User::find($id);
    }
}

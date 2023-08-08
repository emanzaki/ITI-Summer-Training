@extends('layouts.app')
@section('title')
Posts
@endsection
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Posts</h1>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table mb-0">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">User name</th> 
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                    
                    <th scope="row">{{$post['id']}}</th>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['descr']}}</td>
                    <td>{{ $post->user->name ?? 'Deleted User' }}</td>
                    <td>{{$post['created_at']}}</td>
                    <td>{{$post['updated_at']}}</td>
                    <td><form action="/posts/{{$post['id']}}" method="POST">
                    @csrf   
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-primary" onclick="location.href='/posts/{{$post['id']}}'">View</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href='/posts/{{$post['id']}}/edit'">Edit</a></button>
                    <button type="Submit" class="btn btn-outline-dark" type="submit">Delete</button></form></td>
                    </tr>
                    @endforeach
                    <tr>
                </tbody>
            </table>

        </div>
        
    </div>
    <button type="button" class="btn btn-success btn-lg " onclick="location.href='/posts/create'">Create Post</button>
</div>

@endsection
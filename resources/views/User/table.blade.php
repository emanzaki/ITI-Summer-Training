@extends('layouts.app')
@section('title')
Posts
@endsection
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table mb-0">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                    
                    <th scope="row">{{$user['id']}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['created_at']}}</td>
                    <td>{{$user['updated_at']}}</td>
                    <td><form action="/users/{{$user['id']}}" method="POST">
                    @csrf   
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-primary" onclick="location.href='/users/{{$user['id']}}'">View</button>
                    <button type="Submit" class="btn btn-outline-dark" type="submit">Delete</button></form></td>
                    </tr>
                    @endforeach
                    <tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    <div style="height: 100vh"></div>
    <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
</div>
@endsection
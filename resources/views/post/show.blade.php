@extends('layouts.app')
@section('title')
View Post {{$post['id']}}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">The Post Number {{$post['id']}}</h1>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">{{$post['id']}}</th>
                        <td>{{$post['title']}}</td>
                        <td>{{$post['descr']}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post['created_at']}}</td>
                        <td>{{$post['updated_at']}}</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div style="height: 100vh"></div>
        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
    </div>
@endsection
@extends('layouts.app')
@section('title')
View user {{$user['id']}}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">The user Number {{$user['id']}}</h1>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                    <th scope="row">{{$user['id']}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['created_at']}}</td>
                    <td>{{$user['updated_at']}}</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
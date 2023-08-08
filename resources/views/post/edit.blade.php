@extends('layouts.app')
@section('title')
Posts
@endsection
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit post</h1>
    <div class="card mb-4">
        <div class="card-body">
        <form action="/posts/{{$post->id}}" method="POST" class=" mb-0" >
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter the Title" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="descr" id="descr" rows="3">{{$post->descr}}</textarea>
                    </div>
                    <br>
                    <button  type="submit" class="btn btn-primary">Done</button>
                    </form>
                    @if($errors->any())
                    <br>
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Error!</strong> 
                    {{$error}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="aria-hidden="true"></button>
                    </div>
                    @endforeach
                    @endif 
        </form>
</div>
</div>
</div>
@endsection
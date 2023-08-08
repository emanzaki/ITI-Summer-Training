@extends('layouts.app')
@section('title')
Create
@endsection
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Posts</h1>
    <div class="card mb-4">
        <div class="card-body">
                <form class=" mb-0" action="/posts" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter the Title">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="descr" id="descr" rows="3"></textarea>
                    </div>
                    <br>
                    <button  type="submit" class="btn btn-primary">Create Post</button>
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
                                            
        </div>
    </div>
    <div style="height: 100vh"></div>
    <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
</div>
@endsection

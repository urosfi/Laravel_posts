

@extends('master')
@section('title')
    Post
@endsection
@section('main')
<div class="container">

    <div class="row">
 <div class="col s4">
  
      <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">{{$post->title}}</span>
            <p>{{$post->body}}</p>
          </div>
          <div class="card-action">
            <a href="#">{{$post->author}}</a>
            <a href="#">{{convert($post->created_at)}}</a>
            <a class="float-right" href="/post/{{$post->id}}/delete">Delete</a>
            <a class="float-right" href="/post/{{$post->id}}/edit">Edit</a>
            
          </div>
        </div>
      </div>
    </div>
</div>
    
@endsection
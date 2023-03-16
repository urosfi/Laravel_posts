@extends('master')
@section('title')
    edit post
@endsection

@section('main')
<div class="container">
<div class="row">

  <div class="col-8 text-center">
    
    <h2>Forma</h2>
 <form action="/post/{{$post_data->id}}/edit" method="post" class="form-group">
  @csrf 
  @method('put')
  <div class="{{$errors->has('title_input') ? 'red' : ''}}">
      <input type="text" placeholder="title" name="title_input" class="form-control"  value="{{$post_data->title}}">
    </div>
      <div class="{{$errors->has('body_input') ? 'red' : ''}}">
        <input type="text" placeholder="body" name="body_input" class="form-control"  value="{{$post_data->body}}">
      </div>
      <div class="{{$errors->has('author_input') ? 'red' : ''}}">
      <input type="text" placeholder="author" name="author_input" class="form-control"  value="{{$post_data->author}}">
    </div>
      <button type="submit" class="form-control btn btn-primary">Save</button>
</form>
@if ($errors->any())
<p class="red-text">There was an error,try again later!</p>
    
@endif



  </div>

</div>


</div>

@endsection

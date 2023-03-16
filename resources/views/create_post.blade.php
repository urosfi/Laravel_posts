@extends('master')
@section('title')
    create post
@endsection

@section('main')
<div class="container">
<div class="row ">

  <div class="col-8 text-center ">
    
    <h2>Forma</h2>
 <form action="" method="post" class="form-group ">
  @csrf <div class="{{$errors->has('title_input') ? 'red' : ''}}">
      <input type="text" placeholder="title" name="title" class="form-control "  >
    </div>
      <div class="{{$errors->has('body_input') ? 'red' : ''}}">
        <input type="text" placeholder="body" name="body" class="form-control">
      </div>
      <div class="{{$errors->has('author_input') ? 'red' : ''}}">
      <input type="text" placeholder="author" name="author" class="form-control">
    </div>
    <div class="{{$errors->has('user_id') ? 'red' : ''}}">
      <input type="text" placeholder="user id" name="user_id" class="form-control">
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

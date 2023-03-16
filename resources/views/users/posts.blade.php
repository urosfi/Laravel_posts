
@extends('master')
@section('title')
    
@endsection
@section('main')
  


    


<div class="container">

<div class="row">
    @foreach ($allposts as $item)
 <div class="col-4">
  <a href="post/{{$item->id}}">
    <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">{{substr($item->title,0,20)}}</span>
          <p>{{substr($item->body ,0 , 40)}}</p>
        </div>
        <div class="card-action">
          <a class="green float-left" href="#">{{substr($item->user->name,0,30)}}</a>
          <a class="float-right" href="#">{{ convert($item->created_at) }}</a>
        </div>
      </div>
    </div>
  </a>

 


 @endforeach


</div>



</div>

        
@endsection
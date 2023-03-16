
@extends('master')
@section('title')
    users
@endsection
@section('main')
  

  
    


<div class="container">

<div class="row">
  
 <div class="col s8 offset-s1 text-center"> 
    <h1>Users</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <th><a href="/user/{{$user->id}}/posts" class="btn">Posts</th>
                <th><a href="/user/{{$user->id}}" class="btn red">Delete</th>

                </tr>

           @endforeach
        </tbody>
    </table>
 </div>
</div>



</div>

        
@endsection
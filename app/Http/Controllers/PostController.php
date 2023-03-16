<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $allPosts=Post::all();
        return view('allposts',['allposts'=>$allPosts]);
    }

    public function show_post($id)
    {
         $post=Post::Find($id);
        return view('post',['post'=>$post]);
    }
public function create()
{

  return view('create_post');
  
}

public function store()
{

   $purerequest=request()->validate([
    'user_id'=>'required',
    'title'=>'required',
    'body'=>'required',
    'author'=>'required'
    
   ]);

 $post3=new Post();
$post3->create($purerequest); 
 
 return redirect(route('home'))->with('create', 'Post created');
}
public function show_for_edit($id)
{
  
  $post_data=Post::find($id);
  return view('edit_post' ,['post_data'=>$post_data]);
}


public function update($id)
{
  $post3=Post::Find($id);
  $purerequest=request()->validate([
    'title_input'=>'required',
    'body_input'=>'required',
    'author_input'=>'required',
   ]);
   
 $post3->title=request('title_input');
 $post3->body=request('body_input');
 $post3->author=request('author_input'); 
 $post3->save();
 return redirect('/post/'.$post3->id)->with('updated','Post UPDATED');
}
 public function delete($id)
 {
   $user=Post::find($id);
   $user->delete();
   return redirect('/postovi');
 }




}

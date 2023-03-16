<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{  
    public function index()
    {   $users=User::all();
        return view('users.home', compact('users'));
    }
    
    public function posts(User $user)
    {
        $allposts=$user->post;
        return view('users.posts' ,compact('allposts'));
       
    }
    public function destroy(User $user)
    {
        $user->delete();
        
        return redirect('/users');
       
    }
}

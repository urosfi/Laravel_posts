
<footer>
    <h3>Last 3 posts </h3>
    <ul>
       @foreach ($latestPosts as $post)
       <a href="/post/{{$post->id}}">Post by{{$post->user->name}} |</a>
       @endforeach 
  
  

    </ul>

</footer>
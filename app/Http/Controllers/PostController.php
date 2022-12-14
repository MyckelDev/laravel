<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\ViewName;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    public function index()    
    {
        
        $posts = Post::get();
        return view('posts.index',['posts' => $posts]);
    
    }
    
    public function show(Post $post)
    {
       return view ('posts.show', ['post' => $post]);

    }

    public function create($validated)
    {
     
        return view('posts.create', ['post' => new Post]);
    } 

    public function store( SavePostRequest $request)
    {

      

      
        Post::create($request-> validated ());

        

        return to_route('posts.index')->with('statu','Post created!');
    }

    public function edit(Post $post)
    {
        return view ('posts.edit', ['post' => $post]);
    }

    public function update( SavePostRequest $request,Post $post)

    {
        
      

        $post->update($request -> validated());

        

        return to_route('posts.show', $post)->with('status', 'Post udate!');;
    
    }
}

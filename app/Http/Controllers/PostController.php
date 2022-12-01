<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\ViewName;

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

    public function create()
    {
     
        return view('posts.create');
    } 

    public function store(Request $request)
    {

        $request->validate([
            'title'=> ['required', 'min:4'],  
            'body'=> ['required'],

        ]);

        $post = new Post;
        $post -> title = $request->input ('title');
        $post->body = $request->input ('body');
        $post->save() ;

        session()->flash('status', 'Post Creado!');

        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        return view ('posts.edit', ['post' => $post]);
    }

    public function update()

    {
        return'Edit post';
    }
}

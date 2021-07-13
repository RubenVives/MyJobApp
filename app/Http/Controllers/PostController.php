<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {   
        /*$posts = Post::orderBy('id' , 'ASC' )->paginate();
        return view('blog', compact('posts'));*/
        return Post::orderBy('id' , 'DESC' )->paginate(8);
    }

    public function show(Post $post)
    {
        return view('post', compact('post'));
    }

    public function showPost($slug)
    {       
        return Post::where('slug' , $slug)->first();
    }
}

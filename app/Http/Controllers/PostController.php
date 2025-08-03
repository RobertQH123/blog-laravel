<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Assuming you have a Post model to fetch posts
        return view('posts.index', ['posts' => $posts]); // Assuming you have a
    
    }
    
    public function create()
    {
        return view('posts.create'); // Assuming you have a posts create view to return
    }

    public function show($post)
    {
        return view('posts.show', ['post' => $post]); // Assuming you have a posts show view to return
    }
}

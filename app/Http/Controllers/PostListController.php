<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostListController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(6);
        return view('blog.blogPost', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('blog.show', compact('post'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $posts = Post::where('title', 'like', '%' . $query . '%')->paginate(3);
        return view('blog.blogPost', compact('posts'));
    }
}

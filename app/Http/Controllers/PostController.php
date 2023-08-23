<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(4);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required|min:10',
            'image' => 'mimes:png,jpg,jpeg',
        ]);

        try {
            $imageName = null;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uniqid('', true) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('images', $imageName, 'public');
            }


            Post::create([
                'title' => $request->input('title'),
                'user_id' => Auth::user()->id,
                'content' => $request->input('content'),
                'image' => $imageName,
            ]);
            return redirect()->route('posts.index')->withMessage('Post Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required|min:10',
            'image' => 'mimes:png,jpg,jpeg',
        ]);
        if($post->user->id == Auth::user()->id){
            try {
                $imageName = $post->image;
                // dd($imageName);
    
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = uniqid('', true) . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('images', $imageName, 'public');
                }
    
    
                $post->update([
                    'title' => $request->input('title'),
                    'user_id' => Auth::user()->id,
                    'content' => $request->input('content'),
                    'image' => $imageName,
                ]);
                return redirect()->route('posts.index')->withMessage('Post Updated Successfully');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', $th->getMessage());
            }
        }
        else{
            return redirect()->back()->with('error', "You can't edit posts of other users.");
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return redirect()->route('posts.index')->withMessage('Post Deleted Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}

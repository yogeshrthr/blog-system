<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\PostService;
use App\Models\Post;
use App\Events\PostBecamePopular;

class PostController extends Controller
{
     protected $postService;
    
    // Service injected automatically
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    
    public function index()
    {

        // $post = Post::find(1); // example post
   
        // Service से posts लो (with caching)
        $posts = $this->postService->getPosts();
        
        return view('posts.index', compact('posts'));
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'is_published' => 'boolean'
        ]);
        
        // Service use करो - सारा logic वहाँ है
        $post = $this->postService->createPost($request->all());
        return redirect()->route('posts.show', $post)
                         ->with('success', 'Post created successfully!');
    }
    
    public function show(Post $post)
    {
        // Increment views via service
        $this->postService->incrementViews($post);
        
        return view('posts.show', compact('post'));
    }
}

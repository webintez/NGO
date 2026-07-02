<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        
        // Load some related posts (same category, excluding current post)
        $relatedPosts = BlogPost::where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->take(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class HomeController extends Controller
{
    public function index()
    {
        // Load the 3 latest blog posts to display on home page under news / initiatives
        $latestPosts = BlogPost::latest()->take(3)->get();
        return view('home', compact('latestPosts'));
    }
}

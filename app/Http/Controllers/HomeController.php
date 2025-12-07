<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function homepage()
    {
        $post = Post::all();
        // return a view named "home"
        return view('home.homepage',compact('post'));
    }
}

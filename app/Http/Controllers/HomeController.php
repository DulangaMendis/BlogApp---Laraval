<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Container\Attributes\Auth;

class HomeController extends Controller
{
    public function homepage()
    {
        $post = Post::all();
       
        return view('home.homepage',compact('post'));
    }

     public function create_post()
    {
        $post = Post::all();
        return view('home.create_post');
    }

      public function user_post(Request $request)
    {
        
       $post=new Post;

       $post->title = $request->title;
       $post->description = $request->description;
       

       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('postimage',$imagename);

       $post->image = $imagename; 
       $post->save();
       return redirect()->back()->with('message','Post Added Succesfully !');
    }

     public function my_post()
    {
        return view('home.my_post');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MainPanelController extends Controller
{
      public function post_page()
    {
        // @if (session()->has('message'))

        // <div class ="alert alert-successfully">
        // <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
        // {{session()->get('message')}}
        // </div>

        // @endif
   

        return view('mainpanel.post_page'); // make sure this view exists
    }
     public function add_post(Request $request)
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

     public function show_post()
    {
        $post = Post::all();


        return view('mainpanel.show_post',compact('post'));


    }


}

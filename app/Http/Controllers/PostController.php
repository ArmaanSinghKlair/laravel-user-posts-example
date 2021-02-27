<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = auth()->user()->posts; 
        return view('posts.index',compact('posts'));
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $post_id = request()->validate([
            'post_id'=>'required'
        ]);
        $post = auth()->user()->posts()->where('id',$post_id)->firstOrFail();
        return view('posts.show', compact('post'));

    }

}

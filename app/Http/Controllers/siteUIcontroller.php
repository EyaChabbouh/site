<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting ;
use App\Category;
use App\Post;
use App\Tag ;
class siteUIcontroller extends Controller
{
     public function index()
    {
        return view('index')->with('blog_name',Setting::first()->blog_name)
                            ->with('categories',Category::all())
                            ->with('tags',Tag::all())
                            ->with('first_post',Post::orderBy('created_at','desc')->first());
    }

    public function showPost($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('show')->with('post',$post)
                            ->with('titel',$post->titel)
                            ->with('post',$post)
                            ->with('settings',Setting::first())
                            ->with('categories',Category::all());
    }
}

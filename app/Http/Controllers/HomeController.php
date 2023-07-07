<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $posts = Post::query()
            ->select('title', 'content')
            ->limit(10)->get();
            
        return view('home')->with('posts', $posts);
    }
}

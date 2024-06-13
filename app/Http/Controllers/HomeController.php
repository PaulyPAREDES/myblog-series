<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getHome()
    {
        $posts = Post::orderBy('id', 'desc')
            ->where('status', 1)
            ->paginate(8);


        $categories = Category::all();

        return view('home', ['categories' => $categories, 'posts' => $posts]);
        // return view('home');    
    }
}

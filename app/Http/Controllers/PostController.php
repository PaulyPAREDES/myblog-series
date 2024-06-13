<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        if (auth()->user()->rol_id === 1) {
            $posts = Post::orderBy('id', 'desc')
                ->paginate(8);
        } else {
            $posts = Post::orderBy('id', 'desc')
                ->where('status', 1)
                ->where('user_id', auth()->id())
                ->paginate(8);
        }

        return view('post.index', compact('posts'));
    }

    public function getShow(Post $id)
    {
        return view('post.show', compact('id'));
        //  return $id; 
    }

    public function getCreate()
    {

        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function getEdit($id)
    {

        $post = Post::find($id);
        $categories = Category::all();
        return view('post.edit', ['categories' => $categories, 'post' => $post]);
    }


    public function store(Request $request)
    {

        $post = new Post();

        if ($request->hasFile('poster')) {

            $file = $request->file('poster');
            $destinationPath = 'storage/posts';
            $path = 'posts/';
            $filename = time() . '-' . $file->getClientOriginalName();

            $uploadSuccess = $request->file('poster')->move($destinationPath, $filename);
            $post->poster = $path . $filename;
        };

        $post->title = $request->title;
        $post->status = $request->status;
        $post->content = $request->content;
        $post->date = $request->date;
        $post->seasons = $request->seasons;
        $post->generos = $request->generos;
        $post->actors = $request->actors;
        $post->director = $request->director;
        $post->plataforma = $request->plataforma;
        $post->category_id = $request->category_id;
        $post->user_id = auth()->id();
        // return $post;
        $post->save();

        return redirect()->route('post');
    }

    public function update(Request $request, Post $id)
    {


        if ($request->hasFile('poster')) {

            $file = $request->file('poster');
            $destinationPath = 'storage/posts';
            $path = 'posts/';
            $filename = time() . '-' . $file->getClientOriginalName();

            $request->file('poster')->move($destinationPath, $filename);
            $id->poster = $path . $filename;
        } else {
            $id->poster = $id->poster;
        };

        $id->title = $request->title;
        $id->status = $request->status;
        $id->content = $request->content;
        $id->date = $request->date;
        $id->seasons = $request->seasons;
        $id->generos = $request->generos;
        $id->actors = $request->actors;
        $id->director = $request->director;
        $id->plataforma = $request->plataforma;
        $id->category_id = $request->category_id;
        $id->user_id = auth()->id();
        // return $id;
        $id->save();

        return redirect()->route('post');
    }


    public function destroy(Post $post)
    {

        $post->delete();
        return redirect()->route('post');
    }
}

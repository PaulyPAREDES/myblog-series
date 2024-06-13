<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{


  public function category(Category $category)
  {

    // return $category;
    $categories = Category::all();

    $posts = Post::where('category_id', $category->id)
      ->where('status', 1)
      ->latest('id')
      ->get();

    return view('category.postCategory', ['categories' => $categories, 'posts' => $posts]);
  }
}

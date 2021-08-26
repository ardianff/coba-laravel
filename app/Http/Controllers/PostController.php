<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $title ='';
        if (request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;

        }
        if (request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;

        }
        return view ('blog',[
            "title"=>"All Posts " .$title,
            "active" =>"blog",
            "posts"=>Post::latest()->filter(request(['search','category', 'author']))->paginate(13)->withQueryString(),
        ]);
    }
    public function show(Post $post){
        return view('post',[
            "post"=>$post,
            "active" =>"blog",
            "title"=>$post->title
        ]);
    }
}

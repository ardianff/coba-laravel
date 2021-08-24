<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home',[
        "title"=> "Home"
    ]);
});
Route::get('/about', function () {
    return view ('about',[
        "title"=> "About",
        "name"=>"Ardian",
        "email"=> "arxd@gmail.com",
        "image"=> "me.png"
    ]);
});

Route::get('/blog',[PostController::class, 'index'] );

Route::get('post/{post:slug}',[PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title'=>'Post Categories',
        'categories'=>Category::all(),
    ]);

});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category',[
        'title'=>$category->name,
        'posts'=>$category->posts,
        'category'=>$category->name
    ]);
});
Route::get('/author/{author:username}' , function (User $author) {
    return view('author',[
        'title'=>'Author '.$author->name,
        'posts'=>$author->posts,
        'author'=>$author->name
    ]);
});
<?php

use App\Adress;
use App\Nid;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('one-to-many', function(){
    $users = User::with('posts')->get();
    return $users; 
});
Route::get('one-to-many-incerse', function(){
    $posts = Post::with('user')->get();
    return $posts; 
});

// ONE TO ONE
Route::get('one-to-one', function(){
    $users = User::with('adress')->get();
    return $users; 
});
Route::get('one-to-one-incerse', function(){
    $posts = Adress::with('user')->get();
    return $posts; 
});

// MANY TO MANY
Route::get('many-to-many', function(){
    $posts = Post::with('tags')->get();

    return $posts; 

    // $tags = Tag::all();
    // return view('posts.index', compact('posts', 'tags'));
});
Route::get('many-to-many-invarse', function(){
    $tag = Tag::find(4);
    return $tag->posts;
});
Route::get('attach', function(){
    $post = Post::find(1);
    // INSERT TAG IN POST
    $post->tags()->attach([2, 3]);
});
Route::get('detach', function(){
    $post = Post::find(1);
    // DELETE TAG FORM POST
    $post->tags()->detach();
    // $post->tags()->detach([3]);
});

Route::get('sync', function ()
{
    $post = Post::find(1);
    // FRIST DELETE POST_ID THEN INSART NEW POST OF TAG ID
    $post->tags()->sync([1,4]);
});
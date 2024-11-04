<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * show all posts , return all posts 
     */
    public function index(){
    //    $posts =  Post::all();
    $posts = Post::orderBy('id','desc')->get();
        return view('posts.index',compact('posts'));
    }

    /**
     * return form view to create new post
     */
    public function create(){
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }

    /**
     * store the new post and return all post page
     */
    public function store(StorePostRequest $request) : RedirectResponse
    {
        $post = Post::create($request->validated());
        return redirect()->route('posts.show',[$post->id]);
    }

    /**
     * show specific post
     */
    public function show(Post $post){
        return view('posts.show',compact('post'));
    }


    /**
     * return edit form view
     */
    public function edit(Post $post){
        $categories = Category::all();
        return view('posts.edit',compact('post','categories'));
    }

    /**
     * store the updated data
     */
    public function update(UpdatePostRequest $request,Post $post) : RedirectResponse
    {
        $bol = $post->update($request->validated());
        return redirect()->route('posts.index');
    }

    /**
     * to delete post 
     */
    public function destroy(Post $post){
       $post->delete();
       return redirect()->route('posts.index');
    }
}

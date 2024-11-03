<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        return view('posts.create');
    }

    /**
     * store the new post and return all post page
     */
    public function store(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->save();
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
        return view('posts.edit',compact('post'));
    }

    /**
     * store the updated data
     */
    public function update(Request $request,Post $post){
        $validated = $request->validate([
            'id' => 'required|unique:posts',
            'title' => 'required|string|max:255',
            'slug' => 'required|string',
            'content' => 'required|string',
        ]);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = Str::slug($request->title);
        $post->save();
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

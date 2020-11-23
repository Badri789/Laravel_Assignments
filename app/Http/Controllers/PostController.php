<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view("post/posts")->with("posts", $posts);
    }

    public function show(Post $post) {
        return view("post/post")->with("post", $post);
    }

    public function create() {
        $tags = Tag::all();
        return view('post/create_post', compact('tags'));
    }

    public function save(Request $request) {
        request()->validate([
            'title' => 'required',
            'body'=> 'required',
            'likes'=> 'required',
            'category' => 'required'
        ]);
        $post =  new Post($request->all());
        $post->save();
        $post->tags()->attach($request->tags);
        return redirect()->route('posts.all');
    }

    public function edit(Post $post){
        $tags = Tag::all();
        return view("post/edit_post", compact('post', 'tags'));
    }

    public function update(Request $request, Post $post) {
        $post->update($request->all());
        $post->tags()->detach($post->tags->pluck('id'));
        $post->tags()->attach($request->tags);
        return redirect()->route('posts.all');
    }

    public function delete(Post $post) {
        $post->delete();
        return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::user()->id)->paginate(5);
        $data = [
            'posts' => $posts
        ];
        return view('post.index', $data);
    }

    public function show($id)
    {
        $category = Post::find($id);
        return $category;
    }

    public function create()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('post.create', $data);
    }

    public function store(Request $request)
    {
        $detail = $request->input('detail');
        $category_id = $request->input('category_id');

        $post = new Post();
        $post->detail = $detail;
        $post->category_id = $category_id;
        $post->user_id = auth()->user()->id;
        $post->complete = 0;
        $post->save();

        return redirect('/post');
    }

    public function edit($id)
    {
    }

    public function update(Request $request)
    {
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/post');
    }

}


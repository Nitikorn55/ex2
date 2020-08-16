<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
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
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request)
    {
    }

    public function delete($id)
    {
    }
}

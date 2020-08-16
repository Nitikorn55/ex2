<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return $category;
    }

    public function show($id)
    {
        $category = Category::find($id);
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

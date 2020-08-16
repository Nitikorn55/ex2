<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $category = User::all();
        return $category;
    }

    public function show($id)
    {
        $category = User::find($id);
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

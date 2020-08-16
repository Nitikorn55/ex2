<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Nitikorn Kanta",
            "age" => 21,
        ];
        return view("welcome", $data);
    }

}

<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'title' => 'My Magazine',
            'heading' => 'Welcome to MyMagazine',
            'content' => 'Read the latest news, articles, and lifestyle posts.'
        ];
        return view('index', $data);
    }
}

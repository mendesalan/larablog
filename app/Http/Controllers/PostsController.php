<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    private $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $posts = $this->model->get();
        return view('welcome', [
            'posts' => $posts
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    private $model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Post $model)
    {
        $this->model = $model;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $posts = $this->model->where('user_id', '=', $user_id)->get();

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        $user_id = auth()->user()->id;

        $company = $this->model->create([
            'user_id' => $user_id,
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('/home');
    }
}

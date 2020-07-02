<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Post;

class ApiController extends Controller
{
    private $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function import()
    {
        $response = Http::get('https://sq1-api-test.herokuapp.com/posts')->getBody()->getContents();
        $decoded = json_decode($response);

        foreach($decoded as $item) {
            foreach($item as $post ) {

                $this->model->create([
                    'title' => $post->title,
                    'description' => $post->description,
                    'created_at' => $post->publication_date
                ]);
            }
        }

        return redirect('/home');
    }
}

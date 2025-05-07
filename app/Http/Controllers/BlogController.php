<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index(BlogFilterRequest $request)
    {
        $object = Post::all();

        return Inertia::render('Blog', [
            'object' => $object
        ]);
    }
    public function show()
    {

    }
}

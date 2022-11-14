<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(int $id) {
        $post = Post::with(['comments', 'user'])
            ->where('id', $id)
            ->first();

        return view('post.index', compact('post'));
    }
}

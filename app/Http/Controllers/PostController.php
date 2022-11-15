<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index( Post $post ) : View
    {
        $post->load(['user', 'comments', 'comments.user']);

        return view('post.index', compact('post'));
    }
}

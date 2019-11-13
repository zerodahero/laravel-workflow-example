<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostDemoWorkflowController extends Controller
{
    public function index(Request $request)
    {
        $post = BlogPost::inRandomOrder()->first();

        dump($post->workflow_transitions());
    }
}

<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Common\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {

        $data = Blog::all();
        return view('blogs.blogs', ['blogs' => $data]);
    }

    public function detail($id)
    {
        $data = Blog::take(3)->get();
        $blog = Blog::find($id);

        return view('blogs.blogs-detail', ["blog" => $blog, "related_blogs" => $data]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function getDetailBlog()
    {
        return view('Blog.detailblog');
    }
    public function getDetailSecBlog()
    {
        return view('Blog.detailblog2');
    }
    public function getDetailThirdBlog()
    {
        return view('Blog.detailblog3');
    }
    public function postBlog(Request $request)
    {
        $request->validate([
            'komentar' => 'required|string',
        ]);

        Blog::create([
            'komentar' => $request->komentar,
        ]);
        return back()->with('success', 'Komentar berhasil dikirim.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function studio()
    {
        return view('pages.studio');
    }

    public function listArticle()
    {
        $articles = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->paginate(6);

        return view('pages.list-article', compact('articles'));
    }

    public function article($slug)
    {
        $post = Post::query()->where('slug', $slug)->firstOrFail();
        $recentPosts = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('pages.article' , compact('post','recentPosts'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blogSingle()
    {
        return view('pages.blog-single');
    }

    public function portfolioDetails()
    {
        return view('pages.portfolio-details');
    }

    public function error404()
    {
        return view('pages.404');
    }
}
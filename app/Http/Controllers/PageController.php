<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $articles = collect([
            (object)[
                'id' => 1,
                'title' => 'The Future of Technology',
                'image' => 'img/articles/tech.jpg',
                'author' => 'John Doe',
                'description' => 'Exploring the latest advancements in technology and their impact on society.',
                'created_at' => now()->subDays(1),
            ],
            (object)[
                'id' => 2,
                'title' => 'Health and Wellness Tips',
                'image' => 'img/articles/health.jpg',
                'author' => 'Jane Smith',
                'description' => 'Discover practical tips for maintaining a healthy lifestyle.',
                'created_at' => now()->subDays(2),
            ],
            (object)[
                'id' => 3,
                'title' => 'Travel Destinations for 2025',
                'image' => 'img/articles/travel.jpg',
                'author' => 'Emily Johnson',
                'description' => 'Top travel destinations to explore in 2025.',
                'created_at' => now()->subDays(3),
            ],
        ]);
        return view('pages.list-article', compact('articles'));
    }

    public function article()
    {
        return view('pages.article');
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
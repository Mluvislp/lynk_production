<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class PageController extends Controller
{
    public function index()
    {
        // Lấy 3 bài viết mới nhất
        $posts = Post::where('status', 'PUBLISHED')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('pages.index', compact('posts'));
    }

    public function studio1()
    {
        return view('pages.studio-1');
    }

    public function studio2()
    {
        return view('pages.studio-2');
    }

    public function studio3()
    {
        return view('pages.studio-3');
    }


    public function listArticle(Request $request)
    {
        // Lấy category từ request (nếu có)
        $categorySlug = $request->query('category');
        $category = null;

        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->first();
            $articles = Post::where('status', 'PUBLISHED')
                ->where('category_id', $category->id)
                ->orderBy('created_at', 'desc')
                ->paginate(6);
        } else {
            $articles = Post::where('status', 'PUBLISHED')
                ->orderBy('created_at', 'desc')
                ->paginate(6);
        }

        // Lấy danh sách categories
        $categories = Category::all();

        return view('pages.list-article', compact('articles', 'categories', 'category'));
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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
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
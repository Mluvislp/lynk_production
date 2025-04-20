@extends('layouts.main')
@section('title', 'LYNK Articles')

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Articles</h2>
                        <ul class="bread-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Articles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Articles Section -->
    <section class="articles section">
        <div class="container">
            <div class="row">
                <!-- Categories Sidebar -->
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="categories">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="{{ route('listArticle') }}" class="{{ is_null($category) ? 'active' : '' }}">All</a></li>
                            @foreach($categories as $cat)
                                <li>
                                    <a href="{{ route('listArticle', ['category' => $cat->slug]) }}" 
                                       class="{{ $category && $category->id === $cat->id ? 'active' : '' }}">
                                        {{ $cat->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Articles List -->
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="row">
                        @foreach($articles as $article)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-article">
                                    <div class="article-head">
                                        <img src="{{ Voyager::image($article->image) }}" alt="{{ $article->title }}">
                                    </div>
                                    <div class="article-body">
                                        <h3 class="article-title">
                                            <a href="{{ route('article', $article->slug) }}">{{ $article->title }}</a>
                                        </h3>
                                        <div class="meta">
                                            <span class="date"><i class="fa fa-clock-o"></i> {{ $article->created_at->format('d M, Y') }}</span>
                                        </div>
                                        <p class="description">{{ Str::limit($article->excerpt, 100) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination">
                                {{ $articles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Articles Section -->
@endsection
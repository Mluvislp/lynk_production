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
                        <ul class="bread-l
                        t">
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
                <!-- Loop through articles -->
                @foreach($articles as $article)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-article">
                            <div class="article-head">
                                <img src="{{ asset($article->image) }}" alt="{{ $article->title }}">
                            </div>
                            <div class="article-body">
                                <h3 class="article-title">
                                    <a href="{{ route('article', $article->id) }}">{{ $article->title }}</a>
                                </h3>
                                <div class="meta">
                                    <span class="author"><i class="fa fa-user"></i> {{ $article->author }}</span>
                                    <span class="date"><i class="fa fa-clock-o"></i> {{ $article->created_at->format('d M, Y') }}</span>
                                </div>
                                <p class="description">{{ Str::limit($article->description, 100) }}</p>
                                <a href="{{ route('article', $article->id) }}" class="btn primary">Read More</a>
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
    </section>
    <!-- End Articles Section -->
@endsection
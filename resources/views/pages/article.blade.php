@extends('layouts.main')
@section('title','LYNK Home page')

@section('content')
	<!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Post</h2>
							<ul class="bread-list">
								<li><a href="index.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Post</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
										<img src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}">
									</div>

									<!-- News Title -->
									<h1 class="news-title"><a href="#">{{ $post->title }}</a></h1>

									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											<span class="date"><i class="fa fa-clock-o"></i>{{ $post->created_at->format('d M Y') }}</span>
										</div>
									</div>

									<!-- News Text -->
									<div class="news-text">
										{!! $post->body !!}
									</div>

									<div class="blog-bottom">
										<!-- Social Share -->
										<ul class="social-share">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
											<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
										<!-- Next Prev -->
										<ul class="prev-next">
											<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
											<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
										</ul>
										<!--/ End Next Prev -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<div class="form">
									<input type="email" placeholder="Search Here...">
									<a class="button" href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Blog Categories</h3>
								<ul class="categor-list">
									<li><a href="#">Men's Apparel</a></li>
									<li><a href="#">Women's Apparel</a></li>
									<li><a href="#">Bags Collection</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Sun Glasses</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								@foreach($recentPosts as $recent)
								<div class="single-post">
									<div class="image">
										<img src="{{ Voyager::image($recent->image) }}" alt="#">
									</div>
									<div class="content">
										<h5><a href="{{ route('article', $recent->slug) }}">{{ $recent->title }}</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar"></i>{{ $recent->created_at->format('M d, Y') }}</li>
											{{-- <li><i class="fa fa-commenting-o"></i>...</li> --}}
										</ul>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
@endsection
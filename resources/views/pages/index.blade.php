@extends('layouts.main')
@section('title','LYNK Home page')

@section('content')
<!-- Slider Area -->
<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/space/IMG_6603.JPG')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1><span>STUDIO</span> - Rental</h1>
                            <p>33 Đ. Số 2, An Phú, Thủ Đức, Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/space/IMG_6454.JPG')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1><span>STUDIO</span> - Rental</h1>
                            <p>33 Đ. Số 2, An Phú, Thủ Đức, Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start End Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('img/space/IMG_6878.JPG')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1><span>STUDIO</span> - Rental</h1>
                            <p>33 Đ. Số 2, An Phú, Thủ Đức, Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->
<!-- Start Schedule Area -->
<section class="schedule">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule middle">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-ui-camera"></i>
                            </div>
                            <div class="single-content">
                                <h4>Studio 50 m<sup>2</sup></h4>
                                <p>SẢN PHẨM NHỎ, CHỤP LOOKBOOK TẠP CHÍ QUAY TALKSHOW, LIVESTREAM, MINI EVENT.</p>
                                <a href="{{ route('studio1') }}">Chi tiết<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule middle">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-camera"></i>
                            </div>
                            <div class="single-content">
                                <h4>Studio 170 m<sup>2</sup></h4>
                                <p>SẢN PHẨM LỚN, TVC, MV, LOOKBOOK TỔ CHỨC WORKSHOP, EVENT, TRIỂN LÃM.</p>
                                <a href="{{ route('studio2') }}">Chi tiết<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule middle">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-camera-alt"></i>
                            </div>
                            <div class="single-content">
                                <h4>Studio 250 m<sup>2</sup></h4>
                                <p>SẢN PHẨM LỚN, TVC, MV, LOOKBOOK TỔ CHỨC WORKSHOP, EVENT, TRIỂN LÃM.</p>
                                <a href="{{ route('studio3') }}">Chi tiết<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/End Start schedule Area -->
<!-- Start Why choose -->
<section class="why-choose section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <h3>Chúng tôi là ai?</h3>
                    <p><b>LYNK PRODUCTION</b> cung cấp dịch vụ quay phim, chụp hình chuyên nghiệp và cho thuê studio cùng thiết bị chuyên dụng</p>
                    <p>Với đội ngũ giàu kinh nghiệm và cơ sở vật chất hiện đại, chúng tôi cam kết đem đến khách hàng những sản phẩm hình ảnh chất lượng cao, áp ứng mọi nhu cầu sáng tạo. </p>
                </div>
                <!-- End Choose Left -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Choose Rights -->
                <div class="choose-right">
                    <div class="video-image">
                    
                        <!--/ End Video Animation -->
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0160234549103!2d106.74984284838236!3d10.810084361940579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175270e04ea5057%3A0xdb5017b80d8750ff!2sLYNK%20Production!5e0!3m2!1sen!2s!4v1744995645423!5m2!1sen!2s" 
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
                <!-- End Choose Rights -->
            </div>
        </div>
    </div>
</section>
<!--/ End Why choose -->

<!-- Start portfolio -->
<section class="portfolio section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Tham khảo các hoạt động</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- filepath: d:\Github\lynk_production\resources\views\pages\index.blade.php -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="owl-carousel portfolio-slider">
                    <div class="single-pf">
                        <img src="{{ asset('img/space/DSCF7761.JPG') }}" alt="#" onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/DSCF7765.JPG') }}" alt="#" onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/DSCF8299.JPG') }}" alt="#" onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/DSCF8368.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/DSCF8652.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/IMG_6454.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/IMG_6603.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/IMG_6878.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/IMG_7267.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/IMG_7268.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/IMG_7273.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/IMG_7276.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/IMG_7277.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                    <div class="single-pf">
                        <img src="{{ asset('img/space/IMG_7278.JPG') }}" alt="#"  onclick="openModal(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="imageModal" class="modal" style="display: none;">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
</div>
<script>
    function openModal(img) {
        var modal = document.getElementById("imageModal");
        var modalImg = document.getElementById("modalImage");
        modal.style.display = "block";
        modalImg.src = img.src;
    }

    function closeModal() {
        var modal = document.getElementById("imageModal");
        modal.style.display = "none";
    }
</script>

<!-- Pricing Table -->
<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Chúng tôi cung cấp dịch vụ với giá cả tốt nhất</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <!-- filepath: d:\Github\lynk_production\resources\views\pages\index.blade.php -->
                        <div class="icon">
                            <img src="{{ asset('img/space/studio2/83f8463af362323c6b737.jpg') }}" alt="Plastic Surgery Icon">
                        </div>
                        <h4 class="title">Studio 50 m<sup>2</sup></h4>
                        
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>300.000 VND 1 Giờ chụp</li>
                        <li><i class="icofont icofont-ui-check"></i>400.000 VND 1 Giờ quay</li>
                        <li><i class="icofont icofont-ui-check"></i>3.000.000 VND 1 Ngày chụp</li>
                        <li><i class="icofont icofont-ui-check"></i>4.000.000 VND 1 Ngày quay</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="{{ route('studio1') }}#kiem-tra-lich-trong">Kiểm tra lịch trống</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <img src="{{ asset('img/space/studio2/83f8463af362323c6b737.jpg') }}" alt="Plastic Surgery Icon">
                        </div>
                        <h4 class="title">Studio 170 m<sup>2</sup></h4>
                        
                    </div>
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>600.000 VND 1 Giờ chụp</li>
                        <li><i class="icofont icofont-ui-check"></i>700.000 VND 1 Giờ quay</li>
                        <li><i class="icofont icofont-ui-check"></i>7.000.000 VND 1 Ngày chụp</li>
                        <li><i class="icofont icofont-ui-check"></i>8.500.000 VND 1 Ngày quay</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="{{ route('studio2') }}#kiem-tra-lich-trong">Kiểm tra lịch trống</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
            <!-- Single Table -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="single-table">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="icon">
                            <img src="{{ asset('img/space/studio2/83f8463af362323c6b737.jpg') }}" alt="Plastic Surgery Icon">
                        </div>
                        <h4 class="title">Studio 250 m<sup>2</sup></h4>
                        
                    </div>
                    <!-- Table List -->
                    <ul class="table-list">
                        <li><i class="icofont icofont-ui-check"></i>1.000.000 VND 1 Giờ chụp</li>
                        <li><i class="icofont icofont-ui-check"></i>1.100.000 VND 1 Giờ quay</li>
                        <li><i class="icofont icofont-ui-check"></i>11.000.000 VND 1 Ngày chụp</li>
                        <li><i class="icofont icofont-ui-check"></i>13.500.000 VND 1 Ngày quay</li>
                    </ul>
                    <div class="table-bottom">
                        <a class="btn" href="{{ route('studio3') }}#kiem-tra-lich-trong">Kiểm tra lịch trống</a>
                    </div>
                    <!-- Table Bottom -->
                </div>
            </div>
            <!-- End Single Table-->
        </div>	
    </div>	
</section>	
<!--/ End Pricing Table -->


@php
/*
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Tìm hiểu thêm.</h2>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <!-- Hiển thị ảnh bài viết -->
                        <img src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <!-- Hiển thị ngày tạo bài viết -->
                            <div class="date">{{ $post->created_at->format('d M, Y') }}</div>
                            <!-- Hiển thị tiêu đề bài viết -->
                            <h2><a href="{{ route('article', $post->slug) }}">{{ $post->title }}</a></h2>
                            <!-- Hiển thị mô tả ngắn -->
                            <p class="text">{{ Str::limit($post->excerpt, 100) }}</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
        @endforeach
        </div>
    </div>
</section>
*/
@endphp
@endsection

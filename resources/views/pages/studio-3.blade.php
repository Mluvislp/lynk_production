@extends('layouts.main')
@section('title','LYNK Home page')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                <h2>Studio Vô Cực 250m²</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Studio 250m²</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Portfolio Details Area -->
<section class="pf-details section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-content">
                    <div class="image-slider">
                        <div class="pf-details-slider">
                            <img src="{{ asset('img/space/studio/studio_250_1.JPG') }}" alt="#">
                            <img src="{{ asset('img/space/studio/studio_250_2.JPG') }}" alt="#">
                            <img src="{{ asset('img/space/studio/studio_250_3.JPG') }}" alt="#">
                        </div>
                    </div>
                    <div class="body-text">
                        <h3>Studio Vô Cực 250m²</h3>
                        <p>Không gian vô cực 250m² rộng lớn, lý tưởng cho các dự án sản phẩm lớn, TVC, MV, lookbook hoặc tổ chức workshop, event, triển lãm quy mô lớn. Studio hỗ trợ đầy đủ tiện ích miễn phí, hệ thống ánh sáng cơ bản và nhiều props sẵn có.</p>
                        <p>Bảng giá áp dụng từ 11/2024: <br>
                        - 1.000.000 VNĐ/giờ chụp <br>
                        - 1.100.000 VNĐ/giờ quay <br>
                        - 11.000.000 VNĐ/ngày chụp <br>
                        - 13.000.000 VNĐ/ngày quay</p>
                        <div class="share">
                            <h4>- Kiểm tra lịch -</h4>
                            <div class="calendar-container">
                            <iframe src="https://calendar.google.com/calendar/embed?src=143041215cafd741d7a6837d72004af5223df5dbf19d71951dd385df4127c290%40group.calendar.google.com&ctz=Asia%2FHo_Chi_Minh" style="border: 0"   width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Details Area -->
@endsection
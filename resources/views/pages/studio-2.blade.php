@extends('layouts.main')
@section('title','LYNK Home page')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Studio Vô Cực 170m²</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Studio 170m²</li>
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
                            <img src="{{ asset('img/space/studio/studio_170_1.JPG') }}" alt="#">
                            <img src="{{ asset('img/space/studio/studio_170_2.JPG') }}" alt="#">
                        </div>
                    </div>
                    <div class="body-text">
                        <h3>Studio Vô Cực 170m²</h3>
                        <p>Studio 170m² lý tưởng cho các dự án TVC, MV, lookbook, workshop và event vừa và nhỏ. Không gian thoáng đãng, thiết kế hiện đại, đi kèm nhiều tiện ích hỗ trợ miễn phí như phòng trang điểm riêng biệt, phông màu cơ bản và ánh sáng setup sẵn.</p>
                        <p>Bảng giá áp dụng từ 11/2024: <br>
                        - 600.000 VNĐ/giờ chụp <br>
                        - 700.000 VNĐ/giờ quay <br>
                        - 7.000.000 VNĐ/ngày chụp <br>
                        - 8.500.000 VNĐ/ngày quay</p>
                        <div class="share">
                            <h4>- Kiểm tra lịch -</h4>
                            <div class="calendar-container">
                            <iframe src="https://calendar.google.com/calendar/embed?src=f8cf4cb162d06ee917f0898efdc4831788ce0ca39954f9022522c692654e24ae%40group.calendar.google.com&ctz=Asia%2FHo_Chi_Minh" style="border: 0"  width="100%" height="600"  frameborder="0" scrolling="no"></iframe>
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
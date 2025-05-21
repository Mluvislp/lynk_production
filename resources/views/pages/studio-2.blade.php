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
                        <img src="{{ asset('img/space/170m/170m2-1.JPG') }}" alt="#">
                        <img src="{{ asset('img/space/170m/170m2-2.JPG') }}" alt="#">
                        <img src="{{ asset('img/space/170m/170m2-3.JPG') }}" alt="#">
                        <img src="{{ asset('img/space/170m/170m2-4.JPG') }}" alt="#">
                        <img src="{{ asset('img/space/170m/170m2-5.JPG') }}" alt="#">
                        <img src="{{ asset('img/space/170m/170m2-6.JPG') }}" alt="#">
                        <img src="{{ asset('img/space/170m/170m2-7.JPG') }}" alt="#">
                        <img src="{{ asset('img/space/170m/170m2-8.JPG') }}" alt="#">
                        <img src="{{ asset('img/space/170m/170m2-9.JPG') }}" alt="#">
                        </div>
                    </div>
                    <div class="body-text">
                        <h3>Studio Vô Cực 170m²</h3>
                        <p>Không gian vô cực 170m² rộng lớn, lý tưởng cho các dự án sản phẩm lớn, TVC, MV, lookbook hoặc tổ chức workshop, event, triển lãm quy mô vừa. Studio hỗ trợ đầy đủ tiện ích miễn phí, hệ thống ánh sáng cơ bản và nhiều props sẵn có.</p>
                        <p><strong>Bảng giá áp dụng từ 11/2024:</strong></p>
                        <ul>
                            <li>600.000 VNĐ/giờ chụp</li>
                            <li>700.000 VNĐ/giờ quay</li>
                            <li>7.000.000 VNĐ/ngày chụp</li>
                            <li>8.500.000 VNĐ/ngày quay</li>
                        </ul>
                        <p><em>- Giá chưa bao gồm VAT</em></p>
                        <p><em>- Booking tối thiểu 2 tiếng</em></p>
                        <p><em>- Gói thuê theo ngày áp dụng tối đa 15 tiếng (phụ thu phí ngoài 15 tiếng + tiếng lẻ phát sinh)</em></p>

                        <p><b>Thiết bị hỗ trợ</b></p>
                        <ul>
                            <li>7 flash Godox (cho gói chụp)</li>
                            <li>3 đèn (Kino, Nanlite 300B) (cho gói quay)</li>
                        </ul>

                        <p><b>Studio hỗ trợ miễn phí</b></p>
                        <ul>
                            <li>Miễn phí tiền điện, phí vệ sinh</li>
                            <li>Miễn phí phát sinh người</li>
                            <li>Miễn phụ thu phí ngoài giờ</li>
                            <li>Miễn phí phông màu cơ bản</li>
                            <li>Miễn phí setup ánh sáng cơ bản</li>
                            <li>Miễn phí phòng trang điểm riêng biệt</li>
                            <li>Miễn phí các prop có sẵn trong studio</li>
                        </ul>

                        <br>
                        <h5 id="kiem-tra-lich-trong">- Kiểm tra lịch -</h5>
                        <div class="calendar-container">
                            <iframe src="https://calendar.google.com/calendar/embed?src=f8cf4cb162d06ee917f0898efdc4831788ce0ca39954f9022522c692654e24ae%40group.calendar.google.com&ctz=Asia%2FHo_Chi_Minh" style="border: 0"  width="100%" height="600"  frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Details Area -->
@endsection
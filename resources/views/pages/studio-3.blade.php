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
                        <img src="{{ asset('img/space/250m/250m2(15).jpg') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2.jpg') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(2).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(4).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(5).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(6).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(7).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(8).jpg') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(9).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(10).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(11).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(12).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(13).jpg') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(14).jpg') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(16).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(17).JPG') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(18).jpg') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(19).jpg') }}" alt="#">
                        <img src="{{ asset('img/space/250m/250m2(20).JPG') }}" alt="#">

                        </div>
                    </div>
                    <div class="body-text">
                        <h3>Studio Vô Cực 250m²</h3>
                        <p>Không gian vô cực 250m² rộng lớn, lý tưởng cho các dự án sản phẩm lớn, TVC, MV, lookbook hoặc tổ chức workshop, event, triển lãm quy mô lớn. Studio hỗ trợ đầy đủ tiện ích miễn phí, hệ thống ánh sáng cơ bản và nhiều props sẵn có.</p>
                        <p><strong>Bảng giá áp dụng từ 11/2024:</strong></p>
                        <ul>
                            <li>1.000.000 VNĐ/giờ chụp</li>
                            <li>1.100.000 VNĐ/giờ quay</li>
                            <li>11.000.000 VNĐ/ngày chụp</li>
                            <li>13.000.000 VNĐ/ngày quay</li>
                        </ul>
                        <p><em>- Giá chưa bao gồm VAT</em></p>
                        <p><em>- Booking tối thiểu 2 tiếng</em></p>
                        <p><em>- Gói thuê theo ngày áp dụng tối đa 15 tiếng (phụ thu phí ngoài 15 tiếng: 750.000VNĐ/1H)</em></p>

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
                            <iframe src="https://calendar.google.com/calendar/embed?src=143041215cafd741d7a6837d72004af5223df5dbf19d71951dd385df4127c290%40group.calendar.google.com&ctz=Asia%2FHo_Chi_Minh" style="border: 0"   width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Details Area -->
@endsection
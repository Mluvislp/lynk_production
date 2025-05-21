@extends('layouts.main')
@section('title','LYNK Home page')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Studio Sàn Gỗ 50m²</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Studio 50m² Sàn Gỗ</li>
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
                            <img src="{{ asset('img/space/50m/50m2.JPG') }}" alt="#">
                            <img src="{{ asset('img/space/50m/studio_50_2.JPG') }}" alt="#">
                        </div>
                    </div>
                    <div class="body-text">
                        <h3>Studio Vô Cực 50m²</h3>
                        <p>Không gian vô cực 50m² lý tưởng cho các dự án nhỏ, lookbook, phỏng vấn. Studio hỗ trợ đầy đủ tiện ích miễn phí, hệ thống ánh sáng cơ bản và nhiều props sẵn có.</p>
                        <p><b>Bảng giá áp dụng từ 11/2024:</b></p>
                        <ul>
                            <li>300.000 VNĐ/giờ chụp</li>
                            <li>400.000 VNĐ/giờ quay</li>
                            <li>3.000.000 VNĐ/ngày chụp</li>
                            <li>4.000.000 VNĐ/ngày quay</li>
                        </ul>
                        <p><em>- Giá chưa bao gồm VAT</em></p>
                        <p><em>- Booking tối thiểu 2 tiếng</em></p>
                        <p><em>- Gói thuê theo ngày áp dụng tối đa 15 tiếng (phụ thu phí ngoài 15 tiếng áp dụng + theo tiếng lẻ)</em></p>

                        <p><b>Thiết bị hỗ trợ</b></p>
                        <ul>
                            <li>3 flash Godox (cho gói chụp)</li>
                            <li>2 đèn (Kino, Nanlite 300B) (cho gói quay)</li>
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
                            <iframe src="https://calendar.google.com/calendar/embed?src=cd2807f6cc63de659516959263fb02c40ebd26e9001406309c227d27be687d41%40group.calendar.google.com&ctz=Asia%2FHo_Chi_Minh" style="border: 0"   width="100%" height="600"  frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Details Area -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (window.location.hash === '#kiem-tra-lich-trong') {
            const target = document.getElementById('kiem-tra-lich');
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });
</script>
@endsection
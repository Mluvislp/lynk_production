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
                            <img src="{{ asset('img/space/studio/studio_50_1.JPG') }}" alt="#">
                            <img src="{{ asset('img/space/studio/studio_50_2.JPG') }}" alt="#">
                        </div>
                    </div>
                    <div class="body-text">
                        <h3>Studio Sàn Gỗ 50m²</h3>
                        <p>Studio nhỏ 50m² với sàn gỗ ấm áp, phù hợp cho chụp lookbook, tạp chí, quay talkshow, livestream hoặc mini event.
                         Với thiết kế tinh tế, khu vực này rất được các nhóm nhỏ ưa chuộng vì tính linh hoạt và riêng tư.</p>
                        <p>Bảng giá áp dụng từ 11/2024: <br>
                        - 300.000 VNĐ/giờ chụp <br>
                        - 400.000 VNĐ/giờ quay <br>
                        - 3.500.000 VNĐ/ngày chụp <br>
                        - 4.500.000 VNĐ/ngày quay</p><div class="share">
                            <h4>- Kiểm tra lịch -</h4>
                            <div class="calendar-container">
                            <iframe src="https://calendar.google.com/calendar/embed?src=cd2807f6cc63de659516959263fb02c40ebd26e9001406309c227d27be687d41%40group.calendar.google.com&ctz=Asia%2FHo_Chi_Minh" style="border: 0"   width="100%" height="600"  frameborder="0" scrolling="no"></iframe>
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
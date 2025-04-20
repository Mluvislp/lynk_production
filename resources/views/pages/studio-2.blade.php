@extends('layouts.main')
@section('title','LYNK Home page')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Studio 2</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Studio</li>
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
                            <img src="{{ asset('img/space/DSCF7761.JPG') }}" alt="#">
                            <img src="{{ asset('img/space/DSCF8652.JPG') }}" alt="#">
                            <img src="{{ asset('img/space/IMG_6603.JPG') }}" alt="#">
                        </div>
                    </div>
                    <div class="date">
                        <ul>
                            <li><span>Diện tích :</span> 170 m<sup>2</sup></li>
                            <li><span>Giá :</span> 2.000.000<span>vnđ/h</span></li>
                            <li><span>Lorem ipsum :</span> Lorem ipsum</li>
                        </ul>
                    </div>
                    <div class="body-text">
                        <h3>Here is the name of this project here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor a ti incididunt ut labore et dolore to in magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna aliqua uis nostrud.Lorem ipsum dolor sit amet, in a in to in a consectetur.ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna in a aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod</p>
                        <p>ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna to in aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod.ncididunt ut labore et dolore magna aliqua. </p>
                        <p>ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna a aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod.ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod. dolor sit amet, in aed do eiusmod.ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna aliqua uis nostrud.</p>
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
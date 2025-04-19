<header class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    {{-- <ul class="top-link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul> --}}
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>+84 963 034 996</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:booking.studio@lynkdcreative.com">booking.studio@lynkdcreative.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-12">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('img/logo/LOGO LYNK_02.png') }}" alt="Logo" class="logo-img">
                            </a>
                        </div>
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-7 col-md-9 col-12">
                    <nav class="navigation">
                        <ul class="nav menu">
                            <li class="active"><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-12 text-right">
                    <a href="#" class="btn">BOOK NOW</a>
                </div>
            </div>
        </div>
    </div>
</header>

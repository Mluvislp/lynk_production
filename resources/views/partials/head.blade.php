<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="LYNK Studio - Dịch vụ cho thuê studio quay chụp chuyên nghiệp tại TP.HCM. Không gian đa dạng, ánh sáng tự nhiên, đầy đủ thiết bị cho quay phim, chụp ảnh lookbook, sản phẩm, quảng cáo.">
<meta name="keywords" content="cho thuê studio, thuê studio quay chụp, studio quay phim, studio chụp ảnh, studio TP.HCM, studio chuyên nghiệp, studio LYNK, studio lookbook, studio sản phẩm">
<meta name="author" content="LYNK Studio">
<meta property="og:title" content="LYNK Studio - Cho Thuê Studio Quay Chụp Chuyên Nghiệp Tại TP.HCM">
<meta property="og:description" content="LYNK Studio cung cấp dịch vụ cho thuê studio quay chụp đa dạng diện tích, đầy đủ thiết bị, phù hợp mọi nhu cầu chụp ảnh, quay phim.">
<meta property="og:image" content="{{ asset('img/space/IMG_6603.JPG') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="LYNK Studio - Cho Thuê Studio Quay Chụp Chuyên Nghiệp Tại TP.HCM">
<meta name="twitter:description" content="Thuê studio quay chụp tại TP.HCM với không gian hiện đại, thiết bị đầy đủ. LYNK Studio đồng hành cùng bạn trong mọi concept quay phim, chụp ảnh.">
<meta name="twitter:image" content="{{ asset('img/space/IMG_6603.JPG') }}">

<title>@yield('title', 'LYNK Studio')</title>

<link rel="icon" href="{{ asset('img/favicon_lk.ico') }}">
<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "LYNK Studio",
        "description": "Dịch vụ cho thuê studio quay chụp chuyên nghiệp tại TP.HCM.",
        "image": "{{ asset('img/space/IMG_6603.JPG') }}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "33 Đ. Số 2, An Phú, Thủ Đức",
            "addressLocality": "Hồ Chí Minh",
            "addressCountry": "VN"
        },
        "telephone": "+84-123-456-789",
        "url": "{{ url('/') }}"
    }
</script>
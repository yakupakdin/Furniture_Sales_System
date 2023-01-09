@extends('index')
@section('body')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5" style="color:#241f21; ">
            <div class="col-lg-6 d-none d-lg-block">
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">Bushcraft Mobilya</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
            </div>
            <div class="col-lg-3 col-6 text-right">
                <div class="navbar-nav mr-auto py-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                           style="width: 50%;float: right;">Yönetici Seçenekleri</a>
                        <div class="dropdown-menu rounded-0 m-0" style="right: 0px; width: 50%;">
                            <a href="{{route('admin')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Anasayfa</a>
                            <a href="{{route('admindetail')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Profil Bilgileri</a>
                            <a href="{{route('userdetail')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Kullanıcı Profilleri</a>
                            <a href="{{route('itemDetails')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Ürün Ayarları</a>
                            <a href="{{route('logout')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #ff7a42; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Çıkış Yap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold">Bushcraft Mobilya</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{route('admin')}}" class="nav-item nav-link">Anasayfa</a>
                            <a href="{{route('adminaboutUs')}}" class="nav-item nav-link">Hakkımızda</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategoriler</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="#" class="dropdown-item">Koltuk</a>
                                    <a href="#" class="dropdown-item">Masa Sandalye</a>
                                    <a href="#" class="dropdown-item">Dolap</a>
                                </div>
                            </div>
                            <a href="{{route('adminContact')}}" class="nav-item nav-link active">İletişim</a>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- İçerik Start -->
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="section-container">
                <div class="box d-flex justify-content-center align-items-center">
                    <div class="section-container-body static-page">
                        <p style="color: #172b4d; font-family: -apple-system,BlinkMacSystemFont,&amp;quot; segoe ui&amp;quot;,roboto,oxygen,ubuntu,&amp;quot;fira sans&amp;quot;,&amp;quot;droid sans&amp;quot;,&amp;quot;helvetica neue&amp;quot;,sans-serif; font-size: 1em; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: 0em; line-height: 1.714; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: pre-wrap; word-spacing: 0px; padding: 0px; margin: 1.14rem 0px 0px 0px;" data-renderer-start-pos="181"><strong>İLETİŞİM</strong></p>
                        <p style="color: #172b4d; font-family: -apple-system,BlinkMacSystemFont,&amp;quot; segoe ui&amp;quot;,roboto,oxygen,ubuntu,&amp;quot;fira sans&amp;quot;,&amp;quot;droid sans&amp;quot;,&amp;quot;helvetica neue&amp;quot;,sans-serif; font-size: 1em; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: 0em; line-height: 1.714; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: pre-wrap; word-spacing: 0px; padding: 0px; margin: 1.14rem 0px 0px 0px;" data-renderer-start-pos="191">Sorularınız ve talepleriniz için <a href="mailto:destek@dekopasaj.com">destek@dekopasaj.com</a> adresine e-posta gönderebilirsiniz. Tüm e-maillere 24 saat içerisinde dönüş yapılmaktadır.</p>
                        <p style="color: #172b4d; font-family: -apple-system,BlinkMacSystemFont,&amp;quot; segoe ui&amp;quot;,roboto,oxygen,ubuntu,&amp;quot;fira sans&amp;quot;,&amp;quot;droid sans&amp;quot;,&amp;quot;helvetica neue&amp;quot;,sans-serif; font-size: 1em; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: 0em; line-height: 1.714; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: pre-wrap; word-spacing: 0px; padding: 0px; margin: 1.14rem 0px 0px 0px;" data-renderer-start-pos="191">Destek ekibimizin çalışma saatleri hafta içi 09:00 - 18:00, hafta sonu 10:00 - 19:00 saatleri arasındadır.</p>
                        <p style="color: #172b4d; font-family: -apple-system,BlinkMacSystemFont,&amp;quot; segoe ui&amp;quot;,roboto,oxygen,ubuntu,&amp;quot;fira sans&amp;quot;,&amp;quot;droid sans&amp;quot;,&amp;quot;helvetica neue&amp;quot;,sans-serif; font-size: 1em; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: 0em; line-height: 1.714; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: pre-wrap; word-spacing: 0px; padding: 0px; margin: 1.14rem 0px 0px 0px;" data-renderer-start-pos="191"><span>0850 360 09 79</span></p>
                        <p style="color: #172b4d; font-family: -apple-system,BlinkMacSystemFont,&amp;quot; segoe ui&amp;quot;,roboto,oxygen,ubuntu,&amp;quot;fira sans&amp;quot;,&amp;quot;droid sans&amp;quot;,&amp;quot;helvetica neue&amp;quot;,sans-serif; font-size: 1em; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: 0em; line-height: 1.714; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: pre-wrap; word-spacing: 0px; padding: 0px; margin: 1.14rem 0px 0px 0px;" data-renderer-start-pos="428"><strong>Şirket Bilgileri:</strong></p>
                        <p style="color: #172b4d; font-family: -apple-system,BlinkMacSystemFont,&amp;quot; segoe ui&amp;quot;,roboto,oxygen,ubuntu,&amp;quot;fira sans&amp;quot;,&amp;quot;droid sans&amp;quot;,&amp;quot;helvetica neue&amp;quot;,sans-serif; font-size: 1em; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: 0em; line-height: 1.714; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: pre-wrap; word-spacing: 0px; padding: 0px; margin: 1.14rem 0px 0px 0px;" data-renderer-start-pos="447">Ünvanı: Dekopasaj Teknoloji Hizmetleri ve Ticaret A.Ş.<br>Adres: Esentepe Mah. Kore Şehitleri Cad. Deniz İş Hanı No:48-50 K:4 D:5 Şişli / İstanbul<br>Ticari Sicil Numarası: 30271-5<br>Zincirlikuyu V.D. 273 0666 219<br>MERSİS Numarası: 0273066621900013<br>Kayıtlı Elektronik Posta Adresi: dekopasaj@hs01.kep.tr</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- İçerik End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
@endsection

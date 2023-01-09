@extends('index')
@section('body')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/pop-up-login.css')}}">
    </head>
    <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{route('users')}}" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">Bushcraft Mobilya</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
            </div>
            <div class="col-lg-3 col-6 text-right">
                <div class="nav-item dropdown">
                    <div class="navbar-nav ml-auto py-0">

                        <a href="#" class="login-trigger" href="#" data-target="#login" data-toggle="modal">Giriş Yap / Kayıt Ol</a>
                        <!--Login pop-up start-->
                        <div id="login" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content" style="border-radius: 1em;">
                                    <div class="modal-body">
                                        <button data-dismiss="modal" class="close">&times;</button>
                                        <h4 style="text-align: center;">Giriş Yap</h4>
                                        <form action="{{route('logincontrol')}}" class="signin-form" method="post">
                                            @csrf
                                            <input type="email" name="mail" class="form-control" placeholder="Mail" required/>
                                            <input id="password-field" name="pass" type="password" class="form-control" placeholder="Şifre" />
                                            <div class="form-group">
                                                @if($errors->any())
                                                    <div class="alert" role="alert" style="background-color: #fbceb5;border: #fbceb5;text-align: center;color:darkred;">
                                                        <span class="text-sm" style="font-size: 0.875rem !important;"><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;{{$errors->first()}}</span>
                                                    </div>
                                                @endif
                                                <button type="submit" class="form-control btn submit px-3" >Giriş Yap</button>
                                            </div>
                                        </form>
                                        <h5 style="text-align: center;">Ya Da</h5>
                                        <h4 style="text-align: center;">Kayıt Ol</h4>
                                        <form action="{{route('userRegister')}}" class="signin-form" method="POST" >
                                            @csrf
                                            <div style="display: flex;flex-direction: row;">
                                                <div style="width: 50%; margin-right: 1em">
                                                    <input type="text" name="name" class="form-control" placeholder="İsim" >
                                                </div>
                                                <div style="width: 50%;">
                                                    <input type="text" name="surname" class="form-control" placeholder="Soyisim" />
                                                </div>
                                            </div>
                                            <input type="email" name="registerMail" class="form-control" placeholder="Mail Adresi Giriniz" required/>
                                            <input type="number" name="telno" class="form-control" placeholder="Telefon Numarası Giriniz" required/>
                                            <input id="password-field" name="pass" type="password" class="form-control" placeholder="Şifre Giriniz" />
                                            <div class="form-group">
                                                <button type="submit" class="form-control btn submit px-3" >Kayıt Ol</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Login pop-up end-->
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
                            <a href="{{route('index')}}" class="nav-item nav-link">Anasayfa</a>
                            <a href="{{route('aboutus')}}" class="nav-item nav-link active">Hakkımızda</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategoriler</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="#" class="dropdown-item">Koltuk</a>
                                    <a href="#" class="dropdown-item">Masa Sandalye</a>
                                    <a href="#" class="dropdown-item">Dolap</a>
                                </div>
                            </div>
                            <a href="{{route('contact')}}" class="nav-item nav-link">İletişim</a>
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
                        <div class="col-md-12 col-sm-12 pr15 pl15">
                            <h3 style="text-align: center;"><span class="content-title">BUSHCRAFT MOBİLYA HAKKINDA</span></h3>
                            <p style="text-align: center;"><span lang="TR">Kullanılmış mobilyalar ve dekor ürünleri başka bir mekanda yeniden hayat bulduklarında hem değerlerine değer katıyor hem de yeni mekanlarına keyifli bir soluk getiriyor.</span></p>
                            <p style="text-align: center;"><span style="line-height: 1.5;">Günümüzde, yolunu ayırmak istediğin mobilyalarını satabileceğin yerler çok kısıtlı. Uygun bir vitrin bulsan bile doğru müşterilere ulaşamıyorsun. Almaya kalktığında ise düzgün, seçilmiş olanını bulmak için yorucu bir keşif gezisine çıkman gerekiyor.</span></p>
                            <p style="text-align: center;"><span style="line-height: 1.5;">Biz de tam olarak bu yüzden bu ürünlere özel bir pazar yeri oluşturmaya karar verdik. Kullanılmış mobilya avını keyifli bir keşif deneyimine dönüştürürken, satışı cazibeli hale getirdik. Daha iyi satış deneyimi, doğru ürünleri beraberinde getirdi. Doğru ürünler de doğru alıcıları.</span></p>
                            <p style="text-align: center;"><span style="line-height: 1.5;">Dekopasaj olarak, Türkiye'de kullanılmış mobilyanın alınıp satıldığı ve yeniden değerlendiği, 1 numaralı pazar yeri olmayı hedefliyoruz.</span></p>
                            <p style="text-align: center;"><span style="line-height: 1.5;">İstersen kolayca mobilyanı sat, istersen bütçeni sarsmadan, mekanını yeni bir yuva bekleyen mobilyalarla buluştur veya sadece bir keşif yolculuğuna çık. Canın ne zaman isterse seni Dekopasaj'a bekliyoruz.</span></p>
                        </div>
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

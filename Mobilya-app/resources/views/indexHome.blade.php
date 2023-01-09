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
                            <a href="{{route('index')}}" class="nav-item nav-link active">Anasayfa</a>
                            <a href="{{route('aboutus')}}" class="nav-item nav-link">Hakkımızda</a>
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
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <a href="#" class="">
                                <img class="img-fluid" src="img/slider/img-1.png" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background: rgba(0,0,0,0);">
                                    <div class="p-3" style="max-width: 700px;">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <a href="#" class="">
                                <img class="img-fluid" src="img/slider/img-2.png" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background: rgba(0,0,0,0);">
                                    <div class="p-3" style="max-width: 700px;">

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <a href="#" class="">
                                <img class="img-fluid" src="img/slider/img-3.png" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="background: rgba(0,0,0,0);">
                                    <div class="p-3" style="max-width: 700px;">

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Ürünler</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @foreach($products as $item)
                @php
                    $urun = \App\Models\Users::where("id", $item['id'])->first();
                @endphp
                @if ($item['aktif']==1)
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{$item['resimUrl']}}" alt="" style="width:427px;height:226px;">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{$item['ad']}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>{{$item['fiyat']}} ₺</h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <form action="{{route('itemDetail')}}" method="get">
                                    <input name="hiddenid" type="hidden" value="{{$item['id']}}">
                                    <button class="btn btn-sm text-dark p-0">
                                        <i class="fas fa-eye text-primary mr-1"></i>Detayları Gör
                                    </button>
                                </form>
                                <a href="#" class="login-trigger" href="#" data-target="#login" data-toggle="modal" style="padding: 0;">
                                    <button class="btn btn-sm text-dark p-0" name="siparis"">
                                        <i class="fa fa-mouse-pointer text-primary mr-1"></i>Tek Tıkla Sipariş
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- Products End -->
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

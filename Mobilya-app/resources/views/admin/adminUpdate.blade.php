@extends('index')
@section('body')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="width: 50%;float: right;">Ayarlar</a>
                        <div class="dropdown-menu rounded-0 m-0" style="right: 0px; width: 50%;">
                            <a href="{{route('admin')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Anasayfa</a>
                            <a href="{{route('admindetail')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Profil Bilgileri</a>
                            <a href="{{route('userdetail')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Kullan??c?? Profilleri</a>
                            <a href="{{route('itemDetails')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">??r??n Ekle</a>
                            <a href="{{route('logout')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #8b3a3a; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">????k???? Yap</a>
                        </div>
                    </div>

                </div>





            </div>
        </div>
    </div>
    <!-- Topbar End -->





    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-9 col-sm-12 pb-1">
                <div class="d-flex align-items-center " style="padding: 30px;">

                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Profil Bilgileri<br/></h5>

                </div>

                <br/>
                <br/>

                <form action="{{route('adminUpgrade')}}" style="width: 100%" method="post">
                    @csrf
                <div class="border mb-4 flexColumn" >

                    <ul class="list-group flexColumnUl" >

                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Ad??:</strong>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ad" value="{{$yonetici['ad']}}">  </li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Soyad??:</strong> &nbsp;
                            <input type="text" name="soyad"  value="{{$yonetici['soyad']}}"> </li>
                    </ul>
                    <ul class="list-group flexColumnUl" >
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Tc No:</strong> &nbsp;&nbsp;
                            <input type="text" name="tcno" value="{{$yonetici['tcNo']}}"> </li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">E Mail:</strong> &nbsp;&nbsp;
                            <input type="text" name="email"  value="{{$yonetici['eMail']}} " disabled></li>

                    </ul>



                </div>
                    <div style="width:100%;">
{{--                        <a href="" class="" >Kaydet</a>--}}
                        <input type="submit" value="Kaydet" class="btn btn-light py-2 px-3" style="float:right; background-color: #D19C97;">
                    </div>

            </form>
            </div>


        </div>
    </div>
    <!-- Featured End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>


@endsection

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
                            <a href="{{route('users')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Anasayfa</a>
                            <a href="{{route('usersDetail')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #212529; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Profil Bilgileri</a>
                            <a href="{{route('logout')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #8b3a3a; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Çıkış Yap</a>
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
                <form action="{{route('usersUpgrade')}}" style="width: 100%" method="post">
                    @csrf
                    <div class="border mb-4 flexColumn" >
                        <ul class="list-group flexColumnUl">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Adı:</strong>
                                <input type="text" name="isim" value="{{$kullanici['isim']}}"> </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Soyadı:</strong>
                                <input type="text" name="soyisim" value="{{$kullanici['soyisim']}}"> </li>
                        </ul>
                        <ul class="list-group flexColumnUl">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Tc No:</strong>
                                <input type="text" name="tcno" value="{{$kullanici['tcNo']}}"> </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">E Mail:</strong>
                                <input type="email" name="eMail" value="{{$kullanici['eMail']}}"></li>
                        </ul>
                        <ul class="list-group flexColumnUl">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">Telefon:</strong> <input type="text" name="telefon" value="{{$kullanici['telefon']}} "> </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Doğum
                                    Tarihi:</strong> <input type="date" name="dogumTarihi" value="{{$kullanici['dogumTarihi']}}"></li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Şifre: </strong> <input type="password" name="pass"></li>
                        </ul>
                        <ul class="list-group flexColumnUl">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Adres:</strong>
                                <div>
                                &nbsp;@php
                                    if ($kullanici['adresId']!=null){
                                        $address = \App\Models\Address::where("id",$kullanici['adresId'])->first();
                                        $city = \App\Models\City::where("plakaKodu",$address['sehirId'])->first();
                                    echo "<br/><input type='text' name='mahalle' value='{$address['mahalle']} '  placeholder='Mahalle Giriniz'>
                                      <input type='text' name='cadde' value='{$address['cadde']} ' placeholder='Cadde Giriniz' required>
                                      <input type='text' name='sokak' value='{$address['sokak']} ' placeholder='Sokak Giriniz' required>
                                      <input type='text' name='binaNo' value='{$address['binaNo']} ' placeholder='Bina No Giriniz' required>
                                      <input type='text' name='daireNo' value='{$address['daireNo']} ' placeholder='Daire No Giriniz' required>
                                      <input type='text' name='ilce' value='{$address['ilce']} ' placeholder='İlçe Giriniz' required>";
                                } else{
                                        echo "<br/><input type='text' name='mahalle'  placeholder='Mahalle Giriniz' required>
                                      <input type='text' name='cadde' placeholder='Cadde Giriniz' required>
                                      <input type='text' name='sokak' placeholder='Sokak Giriniz' required>
                                      <input type='text' name='binaNo'  placeholder='Bina No Giriniz' required>
                                      <input type='text' name='daireNo'  placeholder='Daire No Giriniz' required>
                                      <input type='text' name='ilce' placeholder='İlçe Giriniz' required>";
                                        }
                                @endphp
                                </div>
                                <div>
                                <select name="sehirler" style="width: 210px;">
                                    @foreach($sehirler as $item)
                                        <option value="{{$item['isim']}}" {{$kullanici['adresId']!=null ? $item['plakaKodu'] == $address['sehirId']  ? 'selected' : '':''}}>{{$item['isim']}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </li>

                        </ul>
                        <input type="hidden" name="hiddenid" value="{{$kullanici['id']}}">
                        <ul class="list-group flexColumnUl" style="justify-content: flex-end; margin-right: 1%;max-width: 8%;">
                        <input type="submit" value="Kaydet" class="btn btn-light py-2 px-3" style="float:right; background-color: #FF5000; color: white; height: 50px;">
                        </ul>
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

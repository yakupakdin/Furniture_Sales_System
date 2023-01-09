@extends('index')
@section('body')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                           style="width: 50%;float: right;">Ayarlar</a>
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
                            white-space: nowrap;background-color: transparent; border: 0;">Ürün Ekle</a>
                            <a href="{{route('logout')}}" class="" style="display: block;padding: 0.25rem 1.5rem;
                            clear: both; font-weight: 400; color: #ff7a42; text-align: inherit;
                            white-space: nowrap;background-color: transparent; border: 0;">Çıkış Yap</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">

            <h3 style="margin: auto"> Ürün Ekleme Platformu</h3>
            <div class="col-lg-8 table-responsive mb-5" style="flex: 100%;max-width: 100%;">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Fiyat</th>
                        <th>Stok Adet</th>
                        <th>Açıklama</th>
                        <th>Durum</th>
                    </tr>
                    </thead>
                    <tbody class="align-middle">

                    <tr>
                        <form enctype="multipart/form-data" action="{{route('itemAdd')}}" method="post">
                            @csrf
                            <td class="align-middle"><input type="file" name="resim"></td>
                            <td class="align-middle"><input type="text" name="ad" placeholder="Başlık Giriniz"></td>
                            <td class="align-middle"><input type="text" name="fiyat" placeholder="Fiyat Giriniz"></td>
                            <td class="align-middle"><input type="text" name="stokAdet" placeholder="Stok Adetini Giriniz"></td>
                            <td class="align-middle"><textarea name="aciklama" style="width: 550px;height: 77px;"
                                                               placeholder="Ürün Açıklamasını Giriniz"></textarea></td>
                            <td class="align-middle">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i>
                                    Ürün Ekle
                                </button>
                            </td>
                        </form>
                    </tr>
                    @foreach($products as $item)
                        @php
                            $products=" ";
                                $products = \App\Models\Products::where("id", $item['id'])->first();


                                if ($item['aktif']==1){echo '<tr style="background-color:white;">';}
                                else {echo '<tr style="background-color:#f8a596">';}

                        @endphp

                        <td class="align-middle"><img src="{{asset($item['resimUrl'])}}" alt="" style="width: 100%;" >
                        </td>
                        <td class="align-middle">{{$item['ad']}}</td>
                        <td class="align-middle">{{$item['fiyat']}}</td>
                        <td class="align-middle">{{$item['stokAdet']}}</td>
                        <td class="align-middle">{{$item['aciklama']}}</td>
                        <td class="align-middle">
                            <form action="{{route('itemDelete')}}" method="get">
                                <input name="hiddenid" type="hidden" value="{{$products['id']}}">

                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-times"></i>Sil
                                </button>

                            </form>
                            <br/>
                            <form action="{{route('itemUpdate')}}" method="get">
                                <input name="hiddenid" type="hidden" value="{{$products['id']}}">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-wrench"></i>Güncelle
                                </button>

                            </form>


                        </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Cart 2 End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    {{--<!-- Contact Javascript File -->--}}
    {{--<script src="mail/jqBootstrapValidation.min.js"></script>--}}
    {{--<script src="mail/contact.js"></script>--}}

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>


@endsection

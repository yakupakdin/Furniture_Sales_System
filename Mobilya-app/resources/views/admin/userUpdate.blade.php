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
                            clear: both; font-weight: 400; color: #8b3a3a; text-align: inherit;
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

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5" style="flex: 100%; max-width: 100%;">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Tc No</th>
                        <th>İsim</th>
                        <th>Soyisim</th>
                        <th>Telefon Numarası</th>
                        <th>Doğum Tarihi</th>
                        <th>E Posta</th>
                        <th>Adres</th>
                        <th>Durum</th>

                    </tr>
                    </thead>


                    <tbody class="align-middle">
                    <tr>
                        <form action="{{route('userUpgrade')}}" method="post">
                            @csrf


                            <td class="align-middle"><input type="text" name="tcno" value="{{$kullanici['tcNo']}}"
                                                            required></td>
                            <td class="align-middle"><input type="text" name="isim" value="{{$kullanici['isim']}}"
                                                            required></td>
                            <td class="align-middle"><input type="text" name="soyisim"
                                                            value="{{$kullanici['soyisim']}}" required></td>
                            <td class="align-middle"><input type="text" name="telefon"
                                                            value="{{$kullanici['telefon']}}" required></td>
                            <td class="align-middle"><input type="text" name="dogumTarihi"
                                                            value="{{$kullanici['dogumTarihi']}}" required></td>
                            <td class="align-middle"><input type="text" name="eMail" value="{{$kullanici['eMail']}}"
                                                            required>
                            </td>

                            <td class="align-middle">

                                @php
                                $address="";
                                    if ($kullanici['adresId']!=null){
                                    $address = \App\Models\Address::where("id",$kullanici['adresId'])->first();
                                    $city = \App\Models\City::where("plakaKodu",$address['sehirId'])->first();
                                    echo "
                                       <input type='text' name='mahalle' value='{$address['mahalle']} '  placeholder='Mahalle Giriniz'>
                                      <input type='text' name='cadde' value='{$address['cadde']} ' placeholder='Cadde Giriniz' required>
                                      <input type='text' name='sokak' value='{$address['sokak']} ' placeholder='Sokak Giriniz' required>
                                      <input type='text' name='binaNo' value='{$address['binaNo']} ' placeholder='Bina No Giriniz' required>
                                      <input type='text' name='daireNo' value='{$address['daireNo']} ' placeholder='Daire No Giriniz' required>
                                      <input type='text' name='ilce' value='{$address['ilce']} ' placeholder='İlçe Giriniz' required>";
                                     }
                                    else{
                                        echo "<input type='text' name='mahalle'  placeholder='Mahalle Giriniz' required>
                                      <input type='text' name='cadde' placeholder='Cadde Giriniz' required>
                                      <input type='text' name='sokak' placeholder='Sokak Giriniz' required>
                                      <input type='text' name='binaNo'  placeholder='Bina No Giriniz' required>
                                      <input type='text' name='daireNo'  placeholder='Daire No Giriniz' required>
                                      <input type='text' name='ilce' placeholder='İlçe Giriniz' required>";
                                        }

                                @endphp

                                <select name="sehirler">
                                    @foreach($sehirler as $item)
                                        <option value="{{$item['isim']}}" {{$address!="" ? $item['plakaKodu'] == $address['sehirId']  ? 'selected' : '':''}}>{{$item['isim']}}</option>

                                    @endforeach
                                </select>

                            </td>

                            <td class="align-middle">

                                <input type="hidden" name="hiddenid" value="{{$kullanici['id']}}">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-wrench"></i>Kaydet
                                </button>
                        </form>


                        @php
                            $id=$kullanici['id'];
                            if ($kullanici['aktif']==1){
                            echo '<form action="'.route('pasifyap').'" method="get">
                            <input  type="hidden" name="hiddenid" value="'.$id.'">';
                            echo '<br/><button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-wrench"></i>Pasif Yap</button>';
                            echo'</form>';}
                             else if ($kullanici['aktif']==0){
                                  echo '<form action="'.route('aktifyap').'" method="get">
                                  <input type="hidden" name="hiddenid" value="'.$id.'">';
                                 echo '<br/><button type="submit" class="btn btn-sm btn-primary"><i class="fa-solid fa-wrench"></i>Aktif Yap</button>';
                                 echo'</form>';
                                 }
                        @endphp
                        </td>

                    </tr>

                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <!-- Cart End -->
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

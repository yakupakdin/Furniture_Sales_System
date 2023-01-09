<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Users;
use App\Models\Address;
use App\Models\City;
use App\Models\sepet;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class UsersMainController extends Controller{
    public function usersMain()
    {
        $data['title'] = "Anasayfa";
        $data['products'] = Products::get();
        return view('userPage.main', $data);
    }
    public function aboutUs(){
        $data['title'] = "Hakkımızda";
        return view('userPage.aboutUs',$data);
    }
    public function contact(){
        $data['title'] = "İletişim";
        return view('userPage.contact',$data);
    }
    public function itemDetail(Request $request){
        $id=$request->hiddenid;
        $data['title']="Ürün Detayı";
        $data['items']= Products::where("id", $id)->first();
        return view('userPage.itemDetail',$data);
    }
    public function usersDetail(){
        $data['title']="Profil Bilgileri";
        $data['kullanici']=Users::where("eMail", Session::get('UMail'))->first();
        return view('userPage.userDetail',$data);
    }
    public function usersUpdate(Request $request){
        $id=$request->hiddenid;
        if ($request->has('userFrozen')){
            $userFrozen = Users::where("id",$id )->update(array(
                "aktif" => "0",
            ));
            $data['title'] = "Anasayfa";
            $data['products'] = Products::get();
            return view('views/indexHome',$data);
        }
        $data['title']="Profil Güncelle";
        $data['sehirler'] = City::get();
        $data['kullanici']=Users::where('id',$id)->first();

        return view('userPage.userUpdate',$data);
    }
    public function usersUpgrade(Request $request){
        $id = $request->hiddenid;
        $tcno = $request->tcno;
        $isim = $request->isim;
        $soyisim = $request->soyisim;
        $telefon = $request->telefon;
        $dogumTarihi = $request->dogumTarihi;
        $eMail = $request->eMail;
        $pass=$request->pass;
        $adresselect = $request->sehirler;
        $mahalle = $request->mahalle;
        $cadde = $request->cadde;
        $sokak = $request->sokak;
        $binaNo = $request->binaNo;
        $daireNo = $request->daireNo;
        $ilce = $request->ilce;
        $sehirids = City::where("isim", $adresselect)->first();
        $sehirid = $sehirids['plakaKodu'];
        $userAdressUpdate = Address::create([
            "sehirId" => $sehirid,
            "ilce" => $ilce,
            "cadde" => $cadde,
            "mahalle" => $mahalle,
            "sokak" => $sokak,
            "binaNo" => $binaNo,
            "daireNo" => $daireNo,
        ]);
        $userSehirId = DB::table('adresler')->where('ilce', $ilce)
            ->where('cadde', $cadde)
            ->where('mahalle', $mahalle)
            ->where('sokak', $sokak)
            ->where('binaNo', $binaNo)
            ->where('daireNo', $daireNo)
            ->first();
        $usersehir = $userSehirId->id;
        $userUpdate = Users::where("id", $id)->update(array(
            'tcNo' => $tcno,
            'isim' => $isim,
            'soyisim' => $soyisim,
            'telefon' => $telefon,
            'dogumTarihi' => $dogumTarihi,
            'eMail' => $eMail,
            'sifre'=>md5($pass),
            'adresId' => $usersehir,
        ));
        $data['title']="Profil Bilgileri";
        $data['kullanici']=Users::where("eMail", Session::get('UMail'))->first();
        return view('userPage.userDetail',$data);
    }

}

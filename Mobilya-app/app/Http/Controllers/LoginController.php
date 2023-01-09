<?php
namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Users;
class LoginController extends Controller
{

    public function loginControl(Request $request){
        $incomingMail = $request->mail;
        $incomingPass = $request->pass;
        $admin=DB::select('select id from yonetici where eMail = :eMail and sifre = :sifre',['eMail' => $incomingMail,'sifre' => md5($incomingPass)]);
        $user=DB::select('select id from kullanicilar where eMail =:eMail and sifre = :sifre',['eMail'=>$incomingMail,'sifre'=>md5($incomingPass)]);
        $aktifmi = DB::select('select id from kullanicilar where eMail =:eMail and sifre = :sifre and aktif=1',['eMail'=>$incomingMail,'sifre'=>md5($incomingPass)]);

        if ($admin) {
            Session::put('Mail',$incomingMail);
            Session::put('Password',$incomingPass);
            return redirect('admin');

        }
        else if ($user){

            if ($aktifmi){
                $kullanici = Users::where("eMail", $incomingMail)->first();
                $id=$kullanici['id'];



                Session::put('UMail',$incomingMail);
                Session::put('Password',$incomingPass);
               Session::put('id',$id);
               return redirect('users');
            }
            else    {
                return redirect()->back()->withErrors(['msg' => 'Hesabınız Pasif Durumdadır.','alert'=>'alert-danger']);

            }
        }
        else{
            return redirect()->back()->withErrors(['msg' => 'Kullanıcı adı veya şifre hatalı...','alert'=>'alert-danger']);
        }


    }
    public function userRegister(Request $request){

        $name=$request->name;
        $surname=$request->surname;
        $mail=$request->registerMail;
        $telno=$request->telno;
        $pass=$request->pass;

        $userCreate=Users::create([
            'tcNo'=>"00000000000",
            'isim'=>$name,
            'soyisim'=>$surname,
            'telefon'=>$telno,
            'dogumTarihi'=>"1500-10-10",
            'eMail'=>$mail,
            'sifre'=>md5($pass),
            'aktif'=>1,
        ]);
        if ($userCreate) {
            $data['title'] = "Anasayfa";
            $data['products'] = Products::get();
            return view('indexHome',$data);
        }




    }

}

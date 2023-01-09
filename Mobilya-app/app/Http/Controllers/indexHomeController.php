<?php

namespace App\Http\Controllers;

use App\Models\Products;
class indexHomeController extends Controller
{
    public function index(){
        $data['title'] = "Anasayfa";
        $data['products'] = Products::get();
        return view('indexHome',$data);
    }
    public function aboutus(){
        $data['title'] = "Hakkımızda";
        return view('aboutUs',$data);
    }
    public function contact(){
        $data['title'] = "İletişim";
        return view('contact',$data);
    }
}

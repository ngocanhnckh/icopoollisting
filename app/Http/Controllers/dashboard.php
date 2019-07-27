<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\admin;
use App\ico;
use App\icopool;
use App\ads;
class dashboard extends Controller
{

    public function postlogin(Request $req){
        $err=0;
        if(Auth::attempt(['username'=>$req->username,'password'=>$req->password])){
            return redirect()->route('dashboard');
        }
        else{
            $err=1;
            return view('dashboard.login.login',compact('err'));
        }

    }
    public function index(){
        $admin=admin::all();
        $demico=ico::count();
        $demicopool=icopool::count();
        $demads=ads::count();
        $trang='dashboard';
        return view('dashboard.index',compact('admin','demico','demicopool','demads','trang'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin-login');
    }
    public function login(){

        return view('dashboard.login.login');
    }
    public function profile(){
        $admin=admin::all();

        $trang='profile';
        return view('dashboard.profile',compact('admin','demico','demicopool','demads','trang'));
    }
    public function postProfile(Request $req){

        $admin=admin::find(1);
        $pass=$req->password;
        $name=$req->name;
        $username=$req->username;
        $email=$req->email;
        if($pass==null){
            $admin->name=$name;
            $admin->username=$username;
            $admin->email=$email;
            $admin->save();
            return redirect()->route('profile');
        }
        else{
            $admin->password=bcrypt($pass);
            $admin->name=$name;
            $admin->username=$username;
            $admin->email=$email;
            $admin->save();
            return redirect()->route('profile');
        }
    }
    public function ico(){
        $admin=admin::all();
        $trang='ico';
        $ico=ico::all();
        return view('dashboard.ico',compact('trang','admin','ico'));
    }
    public function xoaico($id){
        $ico=ico::find($id);
        $ico->delete();
        return redirect()->back();
    }
    public function editico($id){
        $ico=ico::find($id);
        $admin=admin::all();
        $trang='editico';

        return view('dashboard.editico',compact('trang','ico','admin'));
    }
    public function posteditico(Request $req,$id){
        function to_slug($str) {
            $str = trim(mb_strtolower($str));
            $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
            $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
            $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
            $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
            $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
            $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
            $str = preg_replace('/(đ)/', 'd', $str);
            $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
            $str = preg_replace('/([\s]+)/', '-', $str);
            return $str;
        }
        $ico=ico::find($id);
        $ico->name=         $req->name;
        $ico->mincap=       $req->mincap;
        $ico->bonus=        $req->bonus;
        $ico->Commission=   $req->commission;
        $ico->raised=       $req->raised;
        $ico->Product=      $req->product;
        $ico->teamnpartner= $req->teamnpartner;
        $ico->Market=       $req->market;
        $ico->average=      $req->average;
        $ico->Description=  $req->description;

        $ico->slug=to_slug($req->name);
        $ico->save();
        return redirect()->back();
    }

    public function addico(){
        $ico=ico::all();
        $admin=admin::all();
        $trang='addico';

        return view('dashboard.addico',compact('trang','ico','admin'));
    }
    public function postaddico(Request $req){
        function to_slug($str) {
            $str = trim(mb_strtolower($str));
            $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
            $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
            $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
            $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
            $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
            $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
            $str = preg_replace('/(đ)/', 'd', $str);
            $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
            $str = preg_replace('/([\s]+)/', '-', $str);
            return $str;
        }
        $ico=new ico;
        $ico->name=         $req->name;
        $ico->mincap=       $req->mincap;
        $ico->bonus=        $req->bonus;
        $ico->Commission=   $req->commission;
        $ico->raised=       $req->raised;
        $ico->Product=      $req->product;
        $ico->teamnpartner= $req->teamnpartner;
        $ico->Market=       $req->market;
        $ico->average=      $req->average;
        $ico->Description=  $req->description;

        $ico->slug=to_slug($req->name);
        $ico->save();
        return redirect()->back();
    }
}

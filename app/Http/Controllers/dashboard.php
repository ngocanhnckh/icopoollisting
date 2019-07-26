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
        echo $req->description;
    }
}

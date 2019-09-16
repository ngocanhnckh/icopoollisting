<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\admin;
use App\ico;
use App\icopool;
use App\ads;
use App\icoactive;
use App\blog;
use App\reqico;
use App\reqpool;
use App\page;
class home extends Controller
{
    public function to_slug($str) {
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
    public function postaddico(Request $req){
        $ico=ico::all()->where('slug',$this->to_slug($req->name));
        if(count($ico)!=0){
            return "Ico Đã Tồn tại!!<script>setTimeout(function(){window.location='".route('home')."'},3000);</script>";
        }
        $save = new reqico;
        $save->name=$req->name;
        $save->link=$req->link;
        $save->contact=$req->contact;
        $save->cmt=$req->cmt;
        $save->save();
        return "Your request have post!!<script>setTimeout(function(){window.location='".route('home')."'},3000);</script>";

    }
    public function postaddpool(Request $req){
        $pool=icopool::all()->where('slug',$this->to_slug($req->name));
        if(count($pool)!=0){
            return "IcoPool Đã Tồn tại!!<script>setTimeout(function(){window.location='".route('home')."'},3000);</script>";
        }
        $save = new reqpool;
        $save->name=$req->name;
        $save->link=$req->link;
        $save->contact=$req->contact;
        $save->cmt=$req->cmt;
        $save->save();
        return "Your request have post!!<script>setTimeout(function(){window.location='".route('home')."'},3000);</script>";

    }
    public function index(){
        $title='Home';
        $icopool=icopool::orderBy('score','DESC')->get();
        $check=icopool::all();
        $icoactive=icoactive::all();
        $ico=ico::orderBy('average','DESC')->get();
        $activearr=[];$dem=0;
        foreach($check as $data){
            $i=($data->id)-1;
            $activearr[$i]= $data->activeico;
            $dem++;
        }
        $ana=ico::orderBy('average','DESC')->get();
        $admin=admin::find(1);
        $admin->view=$admin->view+1;
        $admin->save();
        //dd($activearr);
        $ads=ads::all();
        $linktwitter=blog::find(1)->link;
        return view('home.index',compact('title','icopool','activearr','icoactive','ico','ana','ads','linktwitter'));
    }
    public function icodetail($slug){
        $title='Ico Detail';
        $icopool=icopool::all();
        $check=icopool::all();
        $icoactive=icoactive::all();


        $activearr=[];$dem=0;
        foreach($check as $data){
            $i=($data->id)-1;
            $activearr[$i]= $data->activeico;
            $dem++;
        }
        $ana=ico::orderBy('average','DESC')->get();
        $admin=admin::find(1);
        $admin->view=$admin->view+1;
        $admin->save();
        $data=ico::all()->where('slug',$slug)->first();

        return view('home.icodetail',compact('title','icopool','activearr','icoactive','ico','ana','data'));
    }
    public function pooldetail($slug){
        $title='Icopools Detail';
        $icopool=icopool::all();
        $check=icopool::all();
        $icoactive=icoactive::all();


        $activearr=[];$dem=0;
        foreach($check as $data){
            $i=($data->id)-1;
            $activearr[$i]= $data->activeico;
            $dem++;
        }
        $ana=ico::orderBy('average','DESC')->get();
        $admin=admin::find(1);
        $admin->view=$admin->view+1;
        $admin->save();
        $data=icopool::all()->where('slug',$slug)->first();

        return view('home.pooldetail',compact('title','icopool','activearr','icoactive','ico','ana','data'));
    }
    public function blog(){
        $admin=admin::find(1);
        $title='Blog';
        $blog=blog::all();
        $admin->view=$admin->view+1;
        $admin->save();
        return view('home.blog',compact('title','blog'));
    }
    public function baiviet($slug){
        $admin=admin::find(1);
        $admin->view=$admin->view+1;
        $admin->save();
        $blog=blog::all()->where('slug',$slug)->first();
        $title= $blog->title;
        $blog->view++;
        $blog->save();
        return view('home.baiviet',compact('title','blog'));
    }
    public function about(){
        $admin=admin::find(1);
        $admin->view=$admin->view+1;
        $admin->save();
        $blog=blog::all();
        $title= 'About';
        $page=page::all();
        return view('home.about',compact('title','blog','page'));
    }
    public function faq(){
        $admin=admin::find(1);
        $admin->view=$admin->view+1;
        $admin->save();
        $blog=blog::all();
        $title= 'Faq';
$page=page::all();
        return view('home.faq',compact('title','blog','page'));
    }
    public function adv(){
        $admin=admin::find(1);
        $admin->view=$admin->view+1;
        $admin->save();
        $blog=blog::all();
        $title= 'Adv';
$page=page::all();
        return view('home.adv',compact('title','blog','page'));
    }
}

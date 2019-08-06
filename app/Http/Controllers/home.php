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
class home extends Controller
{

    public function index(){
        $title='Home';
        $icopool=icopool::paginate(10);
        $check=icopool::all();
        $icoactive=icoactive::all();
        $ico=ico::orderBy('name','ASC')->get();
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
        return view('home.index',compact('title','icopool','activearr','icoactive','ico','ana'));
    }
    public function icodetail($slug){
        $title='Ico Detail';
        $icopool=icopool::paginate(10);
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
        $icopool=icopool::paginate(10);
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
        $title='Blog';
        $blog=blog::all();

        return view('home.blog',compact('title','blog'));
    }
    public function baiviet($slug){

        $blog=blog::all()->where('slug',$slug)->first();
        $title= $blog->title;
        $blog->view++;
        $blog->save();
        return view('home.baiviet',compact('title','blog'));
    }
}

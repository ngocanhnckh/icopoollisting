<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\admin;
use App\ico;
use App\icopool;
use App\ads;
use App\icoactive;
class dashboard extends Controller
{
    public function deslugico($slug){
        $ico=ico::all()->where('slug',$slug)->first();
        return $ico->name;

    }
    public function deslugpool($slug){
        $icopool=icopool::all()->where('slug',$slug)->first();
        return $icopool->name;

    }
    public function layicoarr(){
            $ico=ico::all();
            $icoc=ico::count();
            $icoarr=[];$dem=0;
            for($i=0;$i<$icoc;$i++){
                $icoarr[$dem]=$ico[$i]->name;
                $dem++;
            }
        $icoarrstr=implode("','", $icoarr);
        return $icoarrstr;
    }

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
    public function acc(){
        $admin=admin::all();
        $trang='acc';
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        return view('dashboard.acc',compact('admin','trang'));
    }
    public function editacc($id){
        $admin=admin::find($id);
        $trang='d';
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }

        return view('dashboard.editacc',compact('admin','trang'));
    }
    public function posteditacc(Request $req,$id){
        if($req->password!=$req->repassword){
            return "Mật khẩu nhập lại không khớp. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('addacc')."'},5000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }

        $admin=admin::find($id);
        $pass=$req->password;
        $name=$req->name;
        $username=$req->username;
        $email=$req->email;
        if($pass==null){
            $admin->name=$name;
            $admin->username=$username;
            $admin->email=$email;
            $admin->save();
            return redirect()->route('acc');
        }
        else{
            $admin->password=bcrypt($pass);
            $admin->name=$name;
            $admin->username=$username;
            $admin->email=$email;
            $admin->save();
            return redirect()->route('acc');
        }
        return redirect()->route('acc');
    }
    public function addacc(){
        $trang='d';
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }

        return view('dashboard.addacc',compact('admin','trang'));
    }
    public function postaddacc(Request $req){
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        if($req->password!=$req->repassword){
            return "Mật khẩu nhập lại không khớp. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('addacc')."'},5000);</script>";
        }
        $admin=new admin;
        $pass=$req->password;
        $name=$req->name;
        $username=$req->username;
        $email=$req->email;

        $admin->password=bcrypt($pass);
        $admin->name=$name;
        $admin->username=$username;
        $admin->email=$email;
        $admin->save();
        return redirect()->route('acc');

    }

    public function postlogin(Request $req){
        $err=0;
        if(Auth::attempt(['username'=>$req->username,'password'=>$req->password],$req->remember)){
            return redirect()->route('dashboard');
        }
        else{
            $err=1;
            return view('dashboard.login.login',compact('err'));
        }

    }
    public function index(){
        if(!Auth::check()){
            return redirect()->route('admin-login');
        }
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
    public function forgot(){
        return view('dashboard.login.forgot');
    }
    public function profile(){
        $admin=admin::find(Auth::user()->id);

        $trang='profile';
        return view('dashboard.profile',compact('admin','demico','demicopool','demads','trang'));
    }
    public function postProfile(Request $req){

        $admin=admin::find(Auth::user()->id);
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
            if($req->password!=$req->repassword){
            return "Mật khẩu nhập lại không khớp. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
            $admin->password=bcrypt($pass);
            $admin->name=$name;
            $admin->username=$username;
            $admin->email=$email;
            $admin->save();
            return redirect()->route('profile');
        }
    }
    public function ico(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $admin=admin::all();
        $ico=ico::all();
        if(Auth::user()->id!=1){
            $ico=ico::all()->where('idngpost',Auth::user()->id);
        }
        $trang='ico';

        return view('dashboard.ico',compact('trang','admin','ico'));
    }
    public function xoaico($id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $ico=ico::find($id);
        if(Auth::user()->id!=1){
            if($ico->idngpost!=Auth::user()->id){
            return "Không có quyền xoá. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
                }
        }
        $icopool=icopool::all();
        $icopoolc=icopool::count();
        for($i=0;$i<$icopoolc;$i++){
            if (strlen(strstr($icopool[$i]->activeico, $ico->name)) > 0) {
                $str=$icopool[$i]->activeico;
                $str = str_replace( $ico->name, '', $str );
                $save=icopool::find($icopool[$i]->id);
                $save->activeico=$str;
                $save->save();
            }
        }
        $ico->delete();
        return redirect()->back();
    }
    public function editico($id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $ico=ico::find($id);
        if(Auth::user()->id!=1){
            if($ico->idngpost!=Auth::user()->id){
            return "Không có quyền Edit. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
                }
        }
        $admin=admin::all();
        $trang='editico';

        return view('dashboard.editico',compact('trang','ico','admin'));
    }
    public function posteditico(Request $req,$id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $ico=ico::find($id);
        if(Auth::user()->id!=1){
            if($ico->idngpost!=Auth::user()->id){
            return "Không có quyền Edit. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
                }
        }

        $ico->Product=      $req->product;
        $ico->teamnpartner= $req->teamnpartner;
        $ico->Market=       $req->market;
        $ico->average=      $req->average;
        $ico->Description=  $req->description;

        $ico->slug=$this->to_slug($req->name);
        $ico->save();
        return redirect()->back();
    }

    public function addico(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $ico=ico::all();
        $admin=admin::all();
        $trang='addico';

        return view('dashboard.addico',compact('trang','ico','admin'));
    }
    public function postaddico(Request $req){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $check=ico::all()->where('slug',$this->to_slug($req->name));
        if(count($check)>0) return"Đã Tồn tại Ico này. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('addico')."'},5000);</script>";
        $ico=new ico;
        $ico->name=         $req->name;
        $ico->Product=      $req->product;
        $ico->teamnpartner= $req->teamnpartner;
        $ico->Market=       $req->market;
        $ico->average=      $req->average;
        $ico->Description=  $req->description;
        $ico->idngpost = Auth::user()->id;
        $ico->slug=$this->to_slug($req->name);
        $ico->save();
        return redirect()->route('ico');
    }
    //ico pool

    public function icopool(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $admin=admin::all();
        $trang='icopool';
        $icopool=icopool::all()->where('idngpost',Auth::user()->id);
        if(Auth::user()->id==1)$icopool=icopool::all();
        $icoactive=icoactive::all();
        $icopoolc=sizeof($icopool);
        $activearr=[];$dem=0;
        foreach($icopool as $data){
            $i=($data->id)-1;
            $activearr[$i]= $data->activeico;
            $dem++;
        }
        //dd($activearr);
        return view('dashboard.icopool',compact('trang','admin','icopool','icoarr','activearr','dem','icoactive'));
    }
    public function xoaicopool($id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }

        $icopool=icopool::find($id);
        if(Auth::user()->id!=1&&$icopool->idngpost!=Auth::user()->id){
            return "Không có quyền xoá icopool này. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $icopool->delete();
        return redirect()->back();
    }

    public function editicopool($id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $icopool=icopool::find($id);
        if(Auth::user()->id!=1&&$icopool->idngpost!=Auth::user()->id){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $admin=admin::all();
        $trang='editicopool';
        $activeico=$icopool->activeico;
        $ico=ico::all();

        $icoarrstr=$this->layicoarr();

        //dd("['".$icoarrstr);
        return view('dashboard.editicopool',compact('trang','icopool','admin','activeico','icoarrstr'));
    }
    public function postediticopool(Request $req,$id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }

        $icopool=icopool::find($id);
        if(Auth::user()->id!=1&&$icopool->idngpost!=Auth::user()->id){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }

        $icopool->activeico=                $req->activeico;
        $icopool->numofparticipants=        $req->numofparticipants;
        $icopool->tok_distr=                $req->tok_distr;
        $icopool->rating=                   $req->rating;
        $icopool->lang=                     $req->lang;
        $icopool->access=                   $req->access;
        $icopool->created=                  $req->created;
        $icopool->addr=                     $req->addr;
        $icopool->Description=              $req->description;

        $icopool->slug=$this->to_slug($req->name);
        $icopool->save();
        return redirect()->route('icopool');
    }

    public function addicopool(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $admin=admin::all();
        $trang='addicopool';
        $icopool=icopool::all();
        $icoarrstr=$this->layicoarr();
        return view('dashboard.addicopool',compact('trang','admin','icopool','icoarrstr'));
    }
    public function postaddicopool(Request $req){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $check=icopool::all()->where('name',$req->name);
        if(count($check)>0) return"Đã Tồn tại Pool này. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('addicopool')."'},5000);</script>";
        $icopool=new icopool;
        $icopool->name=                     $req->name;
        $icopool->activeico=                $req->activeico;
        $icopool->numofparticipants=        $req->numofparticipants;
        $icopool->tok_distr=                $req->tok_distr;
        $icopool->rating=                   $req->rating;
        $icopool->lang=                     $req->lang;
        $icopool->access=                   $req->access;
        $icopool->created=                  $req->created;
        $icopool->addr=                     $req->addr;
        $icopool->Description=              $req->description;
        $icopool->idngpost = Auth::user()->id;
        $icopool->slug= $this->to_slug($req->name);
        $icopool->save();
        return redirect()->route('icopool');
    }
    public function setico($slugpool,$slugico){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $ic=$this->deslugico($slugico);
        $pool=$this->deslugpool($slugpool);
        $ico=ico::all()->where('name',$ic)->first();
        $icopool=icopool::all()->where('name',$pool)->first();
        if(Auth::user()->id!=1&&$icopool->idngpost!=Auth::user()->id&&$ico->idngpost!=Auth::user()->id){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        //check xem ico có active trong pool không

        if (strlen(strstr($icopool->activeico, $ic)) > 0) {
            $trang='d';
            $admin=admin::all();
            $icoactive=icoactive::all()->where('icopool',$pool)->where('ico',$ic);

            if(count($icoactive)==0){
                $icoactive->mincap='';
                $icoactive->bonus='';
                $icoactive->comm='';
                $icoactive->raised='';
            }
            else{
                $icoactive=$icoactive->first();
            }
            return view('dashboard.setico',compact('ic','pool','trang','admin','icoactive'));
            // $icoactive=icoactive::all()->where('icopool',$pool)->where('ico',$ic);
            // if(count($icoactive)==0){
            //     $newicoac=new icoactive;
            //     $newicoac->icopool=$pool;
            //     $newicoac->ico=$ico;
            // }
        }
        else{
            return view('404');
        }

    }
    public function postsetico(Request $req,$icopool,$ico){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
            $icoactive=icoactive::all()->where('icopool',$icopool)->where('ico',$ico);
            $checkico=ico::all()->where('name',$ico)->first();
            $checkicopool=icopool::all()->where('name',$icopool)->first();
         if(Auth::user()->id!=1&&$checkicopool->idngpost!=Auth::user()->id&&$checkico->idngpost!=Auth::user()->id){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
            if(count($icoactive)==0){
                $newicoac=new icoactive;
                $newicoac->icopool=$icopool;
                $newicoac->ico=$ico;
                $newicoac->mincap=$req->mincap;
                $newicoac->bonus=$req->bonus;
                $newicoac->comm=$req->comm;
                $newicoac->raised=$req->raised;
                $newicoac->save();
                return redirect()->route('icopool');
            }
            else{
                $newicoac=icoactive::find($icoactive->first()->id);
                $newicoac->icopool=$icopool;
                $newicoac->ico=$ico;
                $newicoac->mincap=$req->mincap;
                $newicoac->bonus=$req->bonus;
                $newicoac->comm=$req->comm;
                $newicoac->raised=$req->raised;
                $newicoac->save();
                return redirect()->route('icopool');
            }

    }
     public function ads(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $admin=admin::all();
        $trang='ads';
        $ads=ads::all();
        if(Auth::user()->id!=1){

            $ads=ads::all()->where('idngpost',Auth::user()->id);

        }
        return view('dashboard.ads',compact('trang','admin','ads'));
    }
    public function addads(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $ico=ico::all();
        $admin=admin::all();
        $trang='addico';
        return view('dashboard.addads',compact('trang','ico','admin'));
    }
    public function postaddads(Request $req){
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $filenamewithextension = $req->file('img')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $req->file('img')->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;
        $req->file('img')->move(
            'public/uploadads', //nơi cần lưu
            $filenametostore //tên file
        );
        $ads=new ads;
        $ads->name=$req->name;
        $ads->nguoithue=$req->ngthue;
        $ads->tenhinh=$filenametostore;
        $ads->description=$req->description;
        $ads->idngpost = Auth::user()->id;
        $ads->save();
        return redirect()->route('ads');
    }
    public function xoaads($id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }


        $ads=ads::find($id);
        if($ads->idngpost!=Auth::user()->id){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $ads->delete();
        return redirect()->back();
    }
    public function editads($id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $ico=ico::all();
        $admin=admin::all();
        $trang='addico';
        $ads=ads::find($id);
        return view('dashboard.editads',compact('trang','ico','admin','ads'));
    }
    public function posteditads(Request $req,$id){
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if($req->img==null){
            $ads=ads::find($id);
            $ads->name=$req->name;
            $ads->nguoithue=$req->ngthue;
            $ads->description=$req->description;
            $ads->save();
            return redirect()->route('ads');
        }
        $filenamewithextension = $req->file('img')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $req->file('img')->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;
        $req->file('img')->move(
            'public/uploadads', //nơi cần lưu
            $filenametostore //tên file
        );
        $ads=ads::find($id);
            $ads->name=$req->name;
            $ads->nguoithue=$req->ngthue;
            $ads->tenhinh=$filenametostore;
            $ads->description=$req->description;
            $ads->save();
            return redirect()->route('ads');
    }
}

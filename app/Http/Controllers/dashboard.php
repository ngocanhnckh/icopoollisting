<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\admin;
use App\ico;
use App\icopool;
use App\logo;
use App\blog;
use App\reqico;
use App\reqpool;
use App\page;
use App\link;
class dashboard extends Controller
{
    public function deslugico($slug){ //hàm dùng để chuyển slug thành name ico
        $ico=ico::all()->where('slug',$slug)->first();
        return $ico->name;

    }
    public function deslugpool($slug){ // tương tự như trên nhưng là icopool
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
        //link
        public function link(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $admin=admin::all();

        $link=link::all();
        $trang='link';

        return view('dashboard.link',compact('trang','admin','link'));
        }
        public function editlink($id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $admin=admin::all();

        $link=link::find($id);
        $trang='sd';

        return view('dashboard.editlink',compact('trang','admin','link'));
    }
    public function posteditlink($id,Request $req){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $admin=admin::all();

        $link=link::find($id);
        $trang='sd';
        $link->name=$req->name;
        $link->link=$req->link;
        $link->target=$req->target;
        $link->save();
        return redirect()->route('link');
    }
    public function addlink(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $admin=admin::all();
        $link='';
        $trang='sd';

        return view('dashboard.addlink',compact('trang','admin','link'));
    }
    public function postaddlink(Request $req){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $admin=admin::all();

        $link=new link;
        $trang='sd';
        $link->name=$req->name;
        $link->link=$req->link;
        $link->target=$req->target;
        $link->save();
        return redirect()->route('link');
    }
    public function xoalink($id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $admin=admin::all();

        $link=link::find($id);
        $link->delete();

        return redirect()->route('link');
    }

        //end:link
    public function greq(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $admin=admin::all();
        $ico=reqico::all();
        $pool=reqpool::all();

        $trang='greq';

        return view('dashboard.greq',compact('trang','admin','ico','pool'));
    }
    public function xoareqico($id){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $xoa=reqico::find($id);
        $xoa->delete();
        return redirect()->back();
    }
    public function about(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $admin=admin::all();
        $trang='about';
        $page=page::all();
        return view('dashboard.about',compact('admin','trang','page'));
    }
    public function postabout(Request $req){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        $admin=admin::all();
        $trang='about';
        $page=page::all();
        $page[0]->about=$req->about;
        $page[0]->faq=$req->faq;
        $page[0]->adv=$req->adv;
        $page[0]->save();
        return redirect()->back();
    }
    public function acc(){
        $admin=admin::all();
        $trang='acc';
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        return view('dashboard.acc',compact('admin','trang'));
    }
    public function logo(){
        $admin=admin::all();
        $trang='logo';
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 5s<script>setTimeout(function(){window.location='".route('dashboard')."'},5000);</script>";
        }
        return view('dashboard.logo',compact('admin','trang'));
    }
public function postlogo(Request $req){

    $trang='logo';
    if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }

        $logo=logo::find(1);
        if($req->logo!=null){
             $filenamewithextension = $req->file('logo')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $req->file('logo')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $req->file('logo')->move(
                'public/logoimg', //nơi cần lưu
                $filenametostore //tên file
            );
            $logo->logo=$filenametostore;
        }
        if($req->thumnail!=null){
             $filenamewithextension = $req->file('thumnail')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $req->file('thumnail')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $req->file('thumnail')->move(
                'public/thumnailimg', //nơi cần lưu
                $filenametostore //tên file
            );
            $logo->thumnail=$filenametostore;
        }
        $logo->save();
        return redirect()->back();
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
        $trang='dashboard';
        return view('dashboard.index',compact('admin','demico','demicopool','trang'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin-login');
    }
    public function login(){
        return view('dashboard.login.login');
    }
    
    public function profile(){
        $admin=admin::find(Auth::user()->id);

        $trang='profile';
        return view('dashboard.profile',compact('admin','demico','demicopool','trang'));
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
                $str = str_replace( ',,', ',', $str );
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
        $check=ico::all()->where('slug',$this->to_slug($req->name))->first();


            if($check!=null&&$check->name!=$ico->name){
            return "Đã tồn tại ico này. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('ico')."'},3000);</script>";
            }

       

        $poolc=icopool::count();
        $icopool=icopool::all();
        for($i=0;$i<$poolc;$i++){
            $iconame=$ico->name;
            $activeico=$icopool[$i]->activeico;

            if (strlen(strstr($activeico, $iconame)) > 0) {
                $str=$activeico;
                $str = str_replace( $iconame, $req->name, $str );
                $str = str_replace( ',,', ',', $str );
                $save=icopool::find($icopool[$i]->id);
                $save->activeico=$str;
                $save->save();
            }
        }

        $ico->name=$req->name;
        
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
       
        $icopoolc=sizeof($icopool);
        $activearr=[];$dem=0;
        foreach($icopool as $data){
            $i=($data->id)-1;
            $activearr[$i]= $data->activeico;
            $dem++;
        }
        //dd($activearr);
        return view('dashboard.icopool',compact('trang','admin','icopool','icoarr','activearr','dem'));
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

        
        if(Auth::user()->id!=1&&$icopool->idngpost!=Auth::user()->id){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $icopool=icopool::find($id);
        $icopool->name=$req->name;
        $icopool->activeico=                $req->activeico;
        $icopool->numofparticipants=        $req->numofparticipants;
        
        
        $icopool->lang=                     $req->lang;
        $icopool->access=                   $req->access;
        
        $icopool->Description=              $req->description;
        $icopool->score=$req->score;
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
       
        $icopool->lang=                     $req->lang;
        $icopool->access=                   $req->access;
        
        $icopool->Description=              $req->description;
        $icopool->score=$req->score;
        $icopool->idngpost = Auth::user()->id;
        $icopool->slug= $this->to_slug($req->name);
        $icopool->save();
        return redirect()->route('icopool');
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
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        $ads=ads::find(1);
        
        $ads->link=$req->link;
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
    
    public function blog(){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        
        $trang='blog';
        $admin=admin::all();
        $blog=blog::all();
        return view('dashboard.blog',compact('trang','admin','blog'));
    }
    
    public function postaddblog(Request $req){
        if(Auth::check()==false){
            return "Chưa Login. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        if(Auth::user()->id!=1){
            return "Không có quyền truy cập. Bạn sẽ được chuyển hướng sau 3s<script>setTimeout(function(){window.location='".route('dashboard')."'},3000);</script>";
        }
        
       $blog=blog::find(1);
       $blog->link=$req->link;
        $blog->save();
        return redirect()->route('blog');
    }
   
}

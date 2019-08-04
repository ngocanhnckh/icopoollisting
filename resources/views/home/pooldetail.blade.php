@extends('home.master')
@section('content')
<?php
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
?>
<style type="text/css">
td {

}

.table td,
.table th {
    text-align: center;
}

.table>tbody>tr>td,
.table>thead>tr>th {
    vertical-align: middle;
}

#kt_wrapper>div.kt-grid__item.kt-grid__item--fluid.kt-grid.kt-grid--hor>div>div>div.col-md-8>div>div.kt-portlet__body>ul>li>a.active {
    background: linear-gradient(to right, #36d1dc 0%, #5b86e5 100%);
}

.kt-portlet {
    overflow-x: auto;
}
.pointer:hover{
    cursor: pointer;
}
</style>
<!-- end:: Header -->
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <!-- begin:: Subheader -->
    <!-- end:: Subheader -->
    <!-- begin:: Content -->
    <div class="container no-padding">
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">

                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title ">
                                <a onclick="history.back();" class="pointer" style="position: absolute; top:0;left:0; font-size: 80%;" ><i class="flaticon2-back"></i>Back</a>
                                <br><br>
                                <p style="font-size: 120%;">{{$data->name}}</p>

                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Active ICO</th>
                                            <th>Min Cap</th>
                                            <th>Bonus</th>
                                            <th>Comm.</th>
                                            <th>Raised</th>
                                            <th title="Number of Participants"><i class="flaticon2-user"></i></th>
                                            <th>Tok. distr.</th>
                                            <th>Rating</th>
                                            <th>Language</th>
                                            <th>Access</th>
                                            <th>Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                                    <tr>


                                                       <td valign="middle">{{$data->name}}</td>
                                                        <td valign="middle">
                                                            <?php
                                                            $str=$activearr[$data->id-1].',';
                                                            $mid='';$dem=0;$icoarr=[];
                                                            for($i=0;$i<strlen($str);$i++){
                                                                if($str[$i]==' '&&$str[$i-1]==',')continue;
                                                                if($str[$i]==','){
                                                                    echo "<a href='".route('icodetail',to_slug($mid))."' class='cogach'>$mid</a><br>";
                                                                    $icoarr[$dem]=$mid;
                                                                    $dem++;
                                                                    $mid='';
                                                                }
                                                                else{
                                                                    $mid=$mid.''.$str[$i];
                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td valign="middle"><?php

                                                            for($i=0;$i<$dem;$i++){
                                                                $active=$icoactive->where('icopool',$data->name)->where('ico',$icoarr[$i])->first();
                                                                if($active==''){
                                                                    echo"<br>";
                                                                }
                                                                    else
                                                                echo $active->mincap."<br>";
                                                            }
                                                        ?></td>
                                                        <td valign="middle"><?php for($i=0;$i<$dem;$i++){
                                                            $active=$icoactive->where('icopool',$data->name)->where('ico',$icoarr[$i])->first();
                                                            if($active==''){
                                                                    echo"<br>";
                                                                }
                                                                    else
                                                                echo $active->bonus."<br>";
                                                            } ?></td>
                                                        <td valign="middle"><?php for($i=0;$i<$dem;$i++){
                                                            $active=$icoactive->where('icopool',$data->name)->where('ico',$icoarr[$i])->first();
                                                            if($active==''){
                                                                    echo"<br>";
                                                                }
                                                                    else
                                                                echo $active->comm."<br>";
                                                            } ?></td>
                                                        <td valign="middle"><?php for($i=0;$i<$dem;$i++){
                                                            $active=$icoactive->where('icopool',$data->name)->where('ico',$icoarr[$i])->first();
                                                            if($active==''){
                                                                    echo"<br>";
                                                                }
                                                                    else
                                                                echo $active->raised."<br>";
                                                            } ?></td>
                                                        <td valign="middle">{{$data->numofparticipants}}</td>
                                                        <td valign="middle">{{$data->tok_distr}}</td>
                                                        <td valign="middle">{{$data->rating}}</td>
                                                        <td valign="middle">{{$data->lang}}</td>
                                                        <td valign="middle">{{$data->access}}</td>
                                                        <td valign="middle">{{$data->created}}</td>

                                                    </tr>

                                    </tbody>
                                </table>
                                <hr>
                                <h3>Analytics</h3>
                                <br>

                                {!!$data->Description!!}
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end:: Content -->
</div>
@endsection

@extends('dashboard.master')
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
<div class="container-fluid">
    <div class="kt-portlet" style="overflow: auto;">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    All ico pool
                </h3>
                <button onclick="window.location='{{route('addicopool')}}'" class="btn btn-warning ml-lg-5  ml-2 btn-pill" >+ Add New</button>
            </div>
        </div>
        <div class="kt-portlet__body">
            <!--begin::Section-->
            <div class="kt-section">
                <div class="kt-section__content">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ICO Pool Name</th>
                                <th>Active Ico</th>
                                <th>Number Of Participants</th>
                                <th>Tok. distr.</th>
                                <th>Rating</th>
                                <th>Lang.</th>
                                <th>Access</th>
                                <th>Created</th>
                                <th>Addr.</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($icopool as $data)
                            <tr>
                                <th scope="row">{{$data->id}}</th>
                                <td>{{$data->name}}</td>
                                <td><?php
                                    $i=$data->id-1;
                                    $str=$activearr[$i].',';$mid='';
                                    for($j=0;$j<strlen($str);$j++){
                                        if($str[$j]==','){
                                            if($j!=strlen($str)-1){
                                                echo "<a href='".route('setico', ['icopool'=>to_slug($icopool[$i]->name), 'ico'=>to_slug($mid)])."'>$mid, </a>";
                                            }
                                            else echo "<a href='".route('setico', ['icopool'=>to_slug($icopool[$i]->name), 'ico'=>to_slug($mid)])."'>$mid</a>";
                                            $mid='';
                                        }
                                        else if($str[$j]==' '&&$str[$j-1]==','){continue;}
                                        else{
                                            $mid=$mid.''.$str[$j];
                                        }
                                    }

                                ?></td>
                                <td>{{$data->numofparticipants}}</td>
                                <td>{{$data->tok_distr}}</td>
                                <td>{{$data->rating}}</td>
                                <td>{{$data->lang}}</td>
                                <td>{{$data->access}}</td>
                                <td>{{$data->created}}</td>
                                <td>{{$data->addr}}</td>
                                <td>
                                    <button onclick="window.location='{{route('editicopool',$data->id)}}'"  type="button" class="btn btn-brand btn-elevate btn-pill">
                                        <i class="flaticon-edit"></i>
                                        Edit
                                    </button>
                                    <button onclick="window.location='{{route('xoaicopool',$data->id)}}'" type="button" class="btn btn-brand btn-elevate btn-pill btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M10.5857864,13 L9.17157288,11.5857864 C8.78104858,11.1952621 8.78104858,10.5620972 9.17157288,10.1715729 C9.56209717,9.78104858 10.1952621,9.78104858 10.5857864,10.1715729 L12,11.5857864 L13.4142136,10.1715729 C13.8047379,9.78104858 14.4379028,9.78104858 14.8284271,10.1715729 C15.2189514,10.5620972 15.2189514,11.1952621 14.8284271,11.5857864 L13.4142136,13 L14.8284271,14.4142136 C15.2189514,14.8047379 15.2189514,15.4379028 14.8284271,15.8284271 C14.4379028,16.2189514 13.8047379,16.2189514 13.4142136,15.8284271 L12,14.4142136 L10.5857864,15.8284271 C10.1952621,16.2189514 9.56209717,16.2189514 9.17157288,15.8284271 C8.78104858,15.4379028 8.78104858,14.8047379 9.17157288,14.4142136 L10.5857864,13 Z" id="Combined-Shape" fill="#000000"/>
    </g>
</svg>
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
<span class="text-muted">Click Active ICO to set Min cap, Bonus, Comm.</span>
                    </table>
                </div>
            </div>
            <!--end::Section-->
        </div>
        <!--end::Form-->
    </div>
</div>
</div>
@endsection

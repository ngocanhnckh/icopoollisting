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
    line-height: 2.2em;
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

.pointer:hover {
    cursor: pointer;
}
.carousel-indicators li{
    background-color: black;
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
                            <h3 class="kt-portlet__head-title">
                                ICO Pools
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tabs_5_1">Tradding group</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_2">ICO group</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tabs_5_3">Analysis</a>
                            </li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_tabs_5_1" role="tabpanel">
                                <div class="kt-portlet__body">
                                    <!--begin::Section-->
                                    <div class="kt-section">
                                        <div class="kt-section__content">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Group</th>
                                                        <th>Active Ico</th>
                                                        <th>Number Of Participants</th>
                                                        <th>Lang.</th>
                                                        <th>Access</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($icopool as $data)
                                                    <tr onclick="window.location='{{route('pooldetail',to_slug($data->name))}}'" class="pointer">
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
                                                        
                                                
                                                        <td valign="middle">{{$data->numofparticipants}}</td>
                                                        
                                                        <td valign="middle">{{$data->lang}}</td>
                                                        <td valign="middle">{{$data->access}}</td>
                                                        
                                                       
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
                                <div class="kt-portlet__body">
                                    <!--begin::Section-->
                                    <div class="kt-section">
                                        <div class="kt-section__content">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ICO</th>
                                                        <th>Group</th>
                                                        
                                                        <th>Number Of Participants</th>
                                                        
                                                        
                                                        <th>Lang.</th>
                                                        <th>Access</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($ico as $data)
                                                    <tr onclick="window.location='{{route('icodetail',to_slug($data->name))}}'" class="pointer">
                                                        <td>{{$data->name}}</td>
                                                        <td>
                                                            <?php
                                                            $dem=0;$poolarr=[];
                                                            for($i=0;$i< count($icopool);$i++){
                                                                if (strlen(strstr($icopool[$i]->activeico,$data->name )) > 0) {

                                                                    $poolarr[$dem]=$icopool[$i]->name;
                                                                    echo "<a href='".route('pooldetail',to_slug($icopool[$i]->name))."' class='cogach'>".$icopool[$i]->name."</a><br>";
                                                                    $dem++;
                                                                }

                                                            }

                                                            ?>
                                                        </td>
                                                        
                                                        <td>
                                                            <?php
                                                        for($i=0;$i<$dem;$i++){
                                                            $pool1=$icopool->where('name',$poolarr[$i])->first();
                                                            echo $pool1->numofparticipants."<br>";
                                                        }

                                                        ?>
                                                        </td>
                                                        
                                                        
                                                        <td>
                                                            <?php
                                                        for($i=0;$i<$dem;$i++){
                                                            $pool1=$icopool->where('name',$poolarr[$i])->first();
                                                            echo $pool1->lang."<br>";
                                                        }

                                                        ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                        for($i=0;$i<$dem;$i++){
                                                            $pool1=$icopool->where('name',$poolarr[$i])->first();
                                                            echo $pool1->access."<br>";
                                                        }

                                                        ?>
                                                        </td>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_tabs_5_3" role="tabpanel">
                                <div class="kt-portlet__body">
                                    <!--begin::Section-->
                                    <div class="kt-section">
                                        <div class="kt-section__content">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ICO Name</th>

                                                        <th>Score</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($ana as $data)
                                                    <tr onclick="window.location='{{route('icodetail',to_slug($data->name))}}'" class="pointer">
                                                        <td valign="middle">{{$data->name}}</td>

                                                        @if($data->average<5)
                                                        <td valign="middle " class="text-danger">{{$data->average}} </td>
                                                        @elseif($data->average<8&&$data->average>=5)
                                                            <td valign="middle" class="text-warning">{{$data->average}} </td>
                                                            @else
                                                            <td valign="middle" class="text-success">{{$data->average}} </td>
                                                            @endif
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    </div>
    <!-- end:: Content -->
</div>
@endsection

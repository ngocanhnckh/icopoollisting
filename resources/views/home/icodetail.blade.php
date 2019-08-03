@extends('home.master')
@section('content')
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
    <div class="container-fluid no-padding">
        <div class="row">
            <div class="col-md-10">
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
                                            <th>Active Pools</th>
                                            <th>Min Cap</th>
                                            <th>Bonus</th>
                                            <th>Commission</th>
                                            <th>Raised</th>
                                            <th title="Team And Partner"><i class="flaticon2-user"></i></th>
                                            <th>Rating</th>
                                            <th>Language</th>
                                            <th>Access</th>
                                            <th>Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                                    <tr>


                                                        <td >
                                                            <?php
                                                            $dem=0;$poolarr=[];
                                                            for($i=0;$i< count($icopool);$i++){
                                                                if (strlen(strstr($icopool[$i]->activeico,$data->name )) > 0) {

                                                                    $poolarr[$dem]=$icopool[$i]->name;
                                                                    echo "<a href='#' class='cogach'>".$icopool[$i]->name."</a><br>";
                                                                    $dem++;
                                                                }

                                                            }

                                                            ?>
                                                        </td>
                                                        <td ><?php

                                                            for($i=0;$i<$dem;$i++){
                                                            $active=$icoactive->where('icopool',$poolarr[$i])->where('ico',$data->name)->first();
                                                                if($active==''){
                                                                    echo"<br>";
                                                                }
                                                                    else
                                                                echo $active->mincap."<br>";
                                                            }
                                                        ?></td>
                                                        <td ><?php for($i=0;$i<$dem;$i++){
                                                           $active=$icoactive->where('icopool',$poolarr[$i])->where('ico',$data->name)->first();
                                                            if($active==''){
                                                                    echo"<br>";
                                                                }
                                                                    else
                                                                echo $active->bonus."<br>";
                                                            } ?></td>
                                                        <td ><?php for($i=0;$i<$dem;$i++){
                                                            $active=$icoactive->where('icopool',$poolarr[$i])->where('ico',$data->name)->first();
                                                            if($active==''){
                                                                    echo"<br>";
                                                                }
                                                                    else
                                                                echo $active->comm."<br>";
                                                            } ?></td>
                                                        <td ><?php for($i=0;$i<$dem;$i++){
                                                            $active=$icoactive->where('icopool',$poolarr[$i])->where('ico',$data->name)->first();
                                                            if($active==''){
                                                                    echo"<br>";
                                                                }
                                                                    else
                                                                echo $active->raised."<br>";
                                                            } ?></td>
                                                        <td ><?php
                                                        for($i=0;$i<$dem;$i++){
                                                            $pool1=$icopool->where('name',$poolarr[$i])->first();
                                                            echo $pool1->numofparticipants."<br>";
                                                        }

                                                        ?></td>

                                                        <td ><?php
                                                        for($i=0;$i<$dem;$i++){
                                                            $pool1=$icopool->where('name',$poolarr[$i])->first();
                                                            echo $pool1->rating."<br>";
                                                        }

                                                        ?></td>
                                                        <td ><?php
                                                        for($i=0;$i<$dem;$i++){
                                                            $pool1=$icopool->where('name',$poolarr[$i])->first();
                                                            echo $pool1->lang."<br>";
                                                        }

                                                        ?></td>
                                                        <td ><?php
                                                        for($i=0;$i<$dem;$i++){
                                                            $pool1=$icopool->where('name',$poolarr[$i])->first();
                                                            echo $pool1->access."<br>";
                                                        }

                                                        ?></td>
                                                        <td ><?php
                                                        for($i=0;$i<$dem;$i++){
                                                            $pool1=$icopool->where('name',$poolarr[$i])->first();
                                                            echo $pool1->created."<br>";
                                                        }

                                                        ?></td>

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
            <div class="col-md-2">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                ICO Analysis
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content" style="font-size: 120%;">
                                <p class="float-left pb-3" > Product:<b>{{$data->Product}}/10</b></p><br>
                                <p class="float-left pb-3" > Team and <br> partners:  <b>{{$data->teamnpartner}}/10</b></p><br>
                                <p class="float-left pb-3" > Market:  <b>{{$data->Market}}/10</b></p><br>
                                <b class="text-success">Average: {{$data->average}}/10</b>
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

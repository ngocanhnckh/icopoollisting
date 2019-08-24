@extends('home.master')
@section('content')
<style type="text/css">
    body{
        background-color: white;
    }
    #kt_header{
        -webkit-box-shadow: 0px 2px 38px 0px rgba(0, 23, 50, 0.26);
           -moz-box-shadow: 0px 2px 38px 0px rgba(0, 23, 50, 0.26);
                box-shadow: 0px 2px 38px 0px rgba(0, 23, 50, 0.26);
    }
    #kt_footer{
        border-top: 1px solid black;

    }
    .kt-header--fixed.kt-subheader--fixed.kt-subheader--enabled .kt-wrapper{
        padding-top: 0;
    }
</style>

<div class="container mb-5 " style="padding-bottom: 4.3rem;">
    <div class="row">
        <div class="col-12">
            <h1 class="pt-5">About </h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12">
                        {!!$page[0]->about!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

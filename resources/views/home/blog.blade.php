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
            <h1 class="pt-5">Blog </h1>
            <hr>
            <div class="container">
                <div class="row">
                    @foreach($blog as $data)
                        <div class="col-6">
                            <div class="card text-center" >
                                <img class="card-img-top" width="200"  src="{{asset('public/thumbnailblog')}}/{{$data->img}}" >
                                <div class="card-block">
                                    <h4 class="card-title">{{$data->title}}</h4>
                                    <i class="flaticon-eye"></i> {{$data->view}}
                                    <p class="card-text"><span>
                                    {{$data->motangan}}
                                    </span><span style="font-size: 150%; display: inline;">...</span></p>
                                    <a href="{{route('baiviet',$data->slug)}}" class="btn btn-primary">View more</a>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

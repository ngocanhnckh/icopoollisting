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
    .resize{
         display: block;
  max-width:230px;
  max-height:95px;
  width: auto;
  height: auto;
    }
</style>
<div class="kt-portlet kt-portlet--height-fluid">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    <a href="{{route('trangblog')}}"><i class="flaticon2-back"></i>Back</a>
                                                </h3>
                                            </div>
                                            
                                        </div>
                                        <div class="kt-portlet__body kt-portlet__body--fluid">
                                           <div class="row">
        <div class="col-12">
            
            <br>

            <h1 class="pt-5">{{$blog->title}}</h1>.
            <img class="resize" src="{{asset('public/thumbnailblog')}}/{{$blog->img}}" />
            <h3><i class="flaticon-eye"></i> {{$blog->view}}</h3>
            <h5>Posted in {{$blog->created_at}}</h5>
            <h5>Last update {{$blog->updated_at}}</h5>
            <hr>
            <div class="container">
                <div class="row">
                    {!!$blog->content!!}
                </div>
            </div>
        </div>
    </div>
                                        </div>
                                    </div>


@endsection

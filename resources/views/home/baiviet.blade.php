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
<div class="container mb-5 " style="padding-bottom: 4.3rem;">
    <div class="row">
        <div class="col-12">
            <a href="{{route('trangblog')}}"><i class="flaticon2-back"></i>Back</a>
            <br>

            <h1 class="pt-5">{{$blog->title}}</h1>.
            <img class="resize" src="{{asset('public/thumbnailblog')}}/{{$blog->img}}" />
            <h3><i class="flaticon-eye"></i> {{$blog->view}}</h3>
            <h5>Đăng vào ngày {{$blog->created_at}}</h5>
            <h5>Cập nhật lần cuối {{$blog->updated_at}}</h5>
            <hr>
            <div class="container">
                <div class="row">
                    {!!$blog->content!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

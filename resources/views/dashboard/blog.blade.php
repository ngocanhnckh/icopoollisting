@extends('dashboard.master')
@section('content')
<div class="container-fluid">
    <div class="kt-portlet" style="overflow: auto;">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    All Blog
                </h3>
                {{--<button onclick="window.location='{{route('addblog')}}'" class="btn btn-outline-info ml-lg-5  ml-2 btn-pill" >+ Add New</button>--}}
            </div>
        </div>
        <div class="kt-portlet__body">
            <!--begin::Section-->
            <div class="kt-section">
                <div class="kt-section__content">
                <form class="kt-form" method="post" action="{{route('addblog')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-form__section kt-form__section--first">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Link Twitter:</label>
                                <div class="col-lg-4">
                                    <input type="url" class="form-control" value="{{$blog[0]->link}}" placeholder="Add Link" name="link" >
                                </div>
                            </div>
                            
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-success" style="display: inline">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!--end::Section-->
        </div>
        <!--end::Form-->
    </div>
</div>
</div>
@endsection

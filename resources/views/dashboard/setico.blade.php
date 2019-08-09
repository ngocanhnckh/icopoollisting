@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <a href="{{route('icopool')}}" class="form-text text-muted"><i class="flaticon2-back"></i> Back</a>
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            More setup for active ICO
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form" method="post" action="{{route('setico',['icopool'=>$pool,'ico'=>$ic])}}">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-form__section kt-form__section--first">
                            <div class="form-group row">

                                <label class="col-lg-2 col-form-label">ICO Pool NAME:</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" value="{{$pool}}" placeholder="Enter ICO name" name="name" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">ICO Name:</label>
                                <div class="col-lg-4">
                                    <input name="product" value="{{$ic}}" disabled="d" type="text" class="form-control" placeholder="Enter Product" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Min Cap:</label>
                                <div class="col-lg-4">
                                    <input name="mincap" value="{{$icoactive->mincap}}" type="text" class="form-control" placeholder="Enter Min cap" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Bonus:</label>
                                <div class="col-lg-4">
                                    <input name="bonus" value="{{$icoactive->bonus}}" type="text" class="form-control" placeholder="Enter Bonus">
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Comm.:</label>
                                <div class="col-lg-4">
                                    <input name="comm" type="text" value="{{$icoactive->comm}}" class="form-control" placeholder="Enter Comm.">
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Raised:</label>
                                <div class="col-lg-4">
                                    <input name="raised" type="text" class="form-control" value="{{$icoactive->raised}}" placeholder="Enter Raised">
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>

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
                <!--end::Form-->
            </div>
        </div>
    </div>
</div>
@endsection
